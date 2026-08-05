<?php

namespace FaqSolidworks\Controleur;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class ContactControleur
{
	/**
	 * Constructeur : injection du moteur de templates.
	 *
	 * @param Twig $vue Moteur de templates Twig
	 */
	public function __construct(private Twig $vue) {}

	/**
	 * Affiche le formulaire de contact.
	 *
	 * @route GET /contact/{titre}
	 * @route GET /contact
	 *
	 * @param Request  $requete  Requête HTTP
	 * @param Response $reponse  Réponse HTTP
	 * @param array    $args     Arguments de route (titre en base64, optionnel)
	 *
	 * @return Response
	 */
	public function afficher(Request $requete, Response $reponse, array $args = []): Response
	{
		$titreBase64    = $args['titre']      ?? '';
		$urlRetourBase64 = $args['url_retour'] ?? '';
		$titre          = $titreBase64    ? base64_decode($titreBase64)    : '';

		$statut = $requete->getQueryParams()['statut'] ?? '';

		return $this->vue->render($reponse, '14-contact.html.twig', [
			'titre'           => $titre,
			'titreBase64'     => $titreBase64,
			'urlRetourBase64' => $urlRetourBase64,
			'statut'          => $statut,
		]);
	}

	/**
	 * Traite le formulaire de contact.
	 *
	 * @route POST /contact
	 *
	 * @param Request  $requete Requête HTTP
	 * @param Response $reponse Réponse HTTP
	 *
	 * @return Response Redirection GET /contact?statut=ok|err|validation
	 */
	public function traiter(Request $requete, Response $reponse): Response
	{
		$corps = $requete->getParsedBody();

		$nom         = trim($corps['nom']         ?? '');
		$email       = trim($corps['email']       ?? '');
		$message     = trim($corps['message']     ?? '');
		$titreBase64 = trim($corps['titre']       ?? '');
		$honeypot    = trim($corps['website']     ?? '');

		// Anti-spam : honeypot rempli → abandon silencieux
		if ($honeypot !== '') {
			return $reponse->withHeader('Location', '/contact')->withStatus(302);
		}

		// Validation
		if ($nom === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return $reponse->withHeader('Location', '/contact?statut=validation')->withStatus(302);
		}

		$titre = $titreBase64 ? base64_decode($titreBase64) : '';
		$sujet = 'FAQ SW – ' . ($titre !== '' ? $titre : 'Contact');

		// Chargement de la configuration SMTP
		$config = require __DIR__ . '/../config/phpmailer.conf';

		try {
			$mail = new PHPMailer(true);

			$mail->isSMTP();
			$mail->Host       = $config['host'];
			$mail->SMTPAuth   = true;
			$mail->Username   = $config['username'];
			$mail->Password   = $config['password'];
			$mail->SMTPSecure = $config['encryption'] === 'SMTPS' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port       = $config['port'];
			$mail->CharSet    = 'UTF-8';

			$mail->setFrom($config['from_address'], $config['from_name']);
			$mail->addAddress($config['to_address'], $config['to_name']);
			$mail->addReplyTo($email, $nom);

			$mail->Subject = $sujet;
			$mail->Body    = "Nom : $nom\nEmail : $email\n\n$message";

			$mail->send();

			$urlRetour = $urlRetourBase64 ? base64_decode($urlRetourBase64) : '/contact';
			return $reponse->withHeader('Location', $urlRetour)->withStatus(302);

		} catch (Exception $e) {
			return $reponse->withHeader('Location', '/contact?statut=err')->withStatus(302);
		}
	}
}

<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
/**
 * Classe-mère de tous les controleurs d'article du site.
 */

class OngletControleur {
	protected string $onglet; # nom de l'onglet

	/**
	 * Constructeur : injection du moteur de templates.
	 *
	 * Utilise la promotion de propriété PHP 8 : le mot clé
	 * `protected` dans les paramètres déclare et initialise
	 * automatiquement la propriété $vue, ce qui évite
	 * d'écrire $this->vue = $vue; dans le corps du constructeur.
	 *
	 * @param Twig $vue Moteur de templates Twig
	 */
	public function __construct(protected Twig $vue) {}

	/**
	 * Hydratation pour chaque article
	 *
	 * @param string $onglet     nom de l'onglet en kebab-case. C'est souvent le nom d'un dossier
	 *
	 */
	public function hydrate(string $onglet): void
	{
		$this->onglet = $onglet;
	}

	/**
	 * Page d'accueil d'un onglet dont hérite les classes-filles
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 *
	 * @return Response
	 */
	public function accueil(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'accueil');
	}

	/**
	 * Rendu des pages classiques d'un article
	 * =======================================
	 * Beaucoup de pages reposent sur le même modèle. L'objectif est de factoriser le code ici.
	 * Les classes-filles appelleront simplement ces méthodes.
	 *
	 */

	/**
	 * Rendu des pages en construction d'un dossier technique
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 *
	 * @return Response
	 */
	public function renduPageEnConstruction(Request $requete, Response $reponse): Response
	{
		return $this->vue->render($reponse, '12-en-construction.html.twig', [
			'url' => $requete->getUri()->getPath()
  		]);
	}

	/**
	 * Rendu des pages ordinaires
	 *
	 * Crée une page avec du code isssu d'un fichier.
	 *
	 * @param Response	$reponse Objet réponse HTTP
	 * @param string	$fichier Nom du fichier de contenu avec son extension .html.twig ou .html
	 * @param array		$liens_connexes <int, array{texte: string, url: string}>
	 *
	 * @return Response
	 */
	public function renduPageOrdinaire(Response $reponse, string $fichier, array $liens_connexes = []): Response
	{
		foreach ($liens_connexes as $index => $lien) {
			if (!isset($lien['texte'], $lien['url']) || !is_string($lien['texte']) || !is_string($lien['url'])) {
				$liens_connexes[$index] = ['texte' => 'Erreur de lien', 'url' => '#'];
			}
		}

		return $this->vue->render($reponse, '11-article.html.twig', [
			'onglet' => $this->onglet,
			'fichier' => $fichier,
			'liens_connexes' => $liens_connexes
		]);
	}
}
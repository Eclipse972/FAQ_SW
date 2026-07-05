<?php
/**
 * Contrôleur pour les pages autres que celles d'un dossier technique
 * 	- page d'accueil
 * 	- formulaire de contact
 * 	- pages d'erreur
 * 	- etc
 */

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Psr\Http\Message\ResponseFactoryInterface;

class AutrePageControleur
{
    /**
     * Constructeur : injection du moteur de templates.
     *
     * Utilise la promotion de propriété PHP 8 : le mot clé
     * `private` dans les paramètres déclare et initialise
     * automatiquement la propriété $vue, ce qui évite
     * d'écrire $this->vue = $vue; dans le corps du constructeur.
     *
     * @param Twig $vue Moteur de templates Twig
     */
    public function __construct(private Twig $vue) {}

	/**
	 * Fabrique un handler d'erreur pour le middleware Slim.
	 *
	 * @param ResponseFactoryInterface $factory Fabrique de réponses HTTP
	 * @param int    $statut Code HTTP de la réponse (404, 500…)
	 * @param string $titre  Titre de la page d'erreur
	 *
	 * @return \Closure Handler compatible avec setErrorHandler()
	 */
	public function creerHandlerErreur(ResponseFactoryInterface $factory, int $statut, string $titre): \Closure {
		$vue = $this->vue; // capturé avant que Slim ne réaffecte $this sur son conteneur
		return function (Request $requete, \Throwable $e) use ($factory, $statut, $titre, $vue) {
			$reponse = $factory->createResponse($statut);
			return $vue->render($reponse, '13-erreur.html.twig', [
				'titre'   => $titre,
				'message' => $e->getMessage(),
				'code'    => $e->getCode() ?: null,
			]);
		};
	}
}

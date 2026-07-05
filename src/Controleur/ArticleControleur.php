<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
/**
 * Classe-mère de tous les controleur d'article du site.
 */

class ArticleControleur {
	protected string $menu; # nom du fichier contenant le menu

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
     * @param string $menu     nom du fichier contenant le mebu pour l'onglet
	 *
	 * ATTENTION: le nom du dossier en kebab-case donc pas d'espace
     */
    public function hydrate(string $menu): void
	{
        $this->menu = $menu;
    }

	/**
	 * Rendu des pages classique d'un article
	 * ======================================
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
				'url'		=> $requete->getUri()->getPath()
  		]);
	}
}
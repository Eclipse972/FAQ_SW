<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class AccueilControleur extends OngletControleur
{
	/**
	 * Constructeur
	 *
	 * @param Twig $vue Moteur de templates Twig
	 */
	public function __construct(Twig $vue)
	{
		parent::__construct($vue);
		$this->hydrate('accueil');
	}

	/**
     * Page d'accueil.
     *
     * @route /accueil
     *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function accueil(Request $requete, Response $reponse): Response
    {
        return $this->vue->render($reponse, '112-article-spotlight.html.twig', [
            'onglet'  => $this->onglet,
            'fichier' => 'accueil'
        ]);
    }

	/**
     * Rechercher un article.
     *
     * @route /accueil/rechercher-un-article
     *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
	public function rechercherArticle(Request $requete, Response $reponse): Response
    {
       return $this->vue->render($reponse, '111-liste-articles.html.twig', [
			'onglet'  => $this->onglet
		]);
    }

    /**
     * Page "moi".
     *
     * @route /accueil/moi
     *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function moi(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'moi');
    }

    /**
     * Page des nouveautés.
     *
     * @route /accueil/nouveautes
     *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function nouveautes(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'nouveautes');
    }
}

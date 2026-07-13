<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class AccueilControleur extends ArticleControleur
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

    public function accueil(Request $requete, Response $reponse): Response
    {
        return $this->vue->render($reponse, '112-article-spotlight.html.twig', [
            'onglet'  => $this->onglet,
            'fichier' => 'accueil'
        ]);
    }

	public function rechercherArticle(Request $requete, Response $reponse): Response
    {
       return $this->vue->render($reponse, '111-liste-articles.html.twig', [
			'onglet'  => $this->onglet
		]);
    }

    public function moi(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'moi');
    }

    public function nouveautes(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'nouveautes');
    }
}
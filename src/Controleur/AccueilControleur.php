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
       return $this->renduPageOrdinaire($reponse, 'accueil');
    }

    public function navigation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'navigation');
    }

    public function trouverUnArticle(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function moi(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function nouveautes(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }
}
<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class AutreControleur extends ArticleControleur
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

    public function autre(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function presentation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function zoom(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function zoomAuMieux(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function zoomFenetre(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ajusterLeZoom(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function deplacerLaVue(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ouvrirUnFichier(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ouvrir2012(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ouvrir2015(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function mecaniqueGraphique(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function statique(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function cinematique(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function equiProjectivite(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function champVecteurVitesse(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function casierNumerique(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function placerLaBarreDoutils(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }
}
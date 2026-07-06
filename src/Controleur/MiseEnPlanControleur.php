<?php

declare(strict_types=1);

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class MiseEnPlanControleur extends ArticleControleur
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

    public function miseEnPlan(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function presentation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function leModule(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function listeDesArticles(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function fondDePlan(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function vues(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function paletteDeVues(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function vueProjetee(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function vueEnCoupe(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function avec2012(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function avec2015(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function perspective(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function standard(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function personnalisee(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function eclate(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ecorche(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function detailAgrandi(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function cotation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function insererLaCotation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function coterALaMain(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function forcerLeSensDesFleches(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function nombreDeDecimales(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function modifierLesLignesDeRappel(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function rajouterDuTexte(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function erreursClassiques(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function croisementFlecheLigneRappel(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function valeursNonCentrees(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ligneDeRappelDansLeVide(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function coteLoinDeSaForme(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function pointesDeFlecheAuMauvaisEndroit(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function coteEnDehorsDeLaZone(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function miseEnPage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function deplacerLesVues(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function modifierLechelle(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function dessinDensemble(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ajouterDesReperes(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function nomenclature(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function insererUnEclate(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function inclureUnEcorche(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function cartouche(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function exporterEnPdf(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function arbreDeCreation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function lienFichierPieceAssemblage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }
}
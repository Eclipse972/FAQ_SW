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

    public function miseEnPlan(Request $request, Response $response): Response
    {
        return $response;
    }

    public function presentation(Request $request, Response $response): Response
    {
        return $response;
    }

    public function leModule(Request $request, Response $response): Response
    {
        return $response;
    }

    public function listeDesArticles(Request $request, Response $response): Response
    {
        return $response;
    }

    public function fondDePlan(Request $request, Response $response): Response
    {
        return $response;
    }

    public function vues(Request $request, Response $response): Response
    {
        return $response;
    }

    public function paletteDeVues(Request $request, Response $response): Response
    {
        return $response;
    }

    public function vueProjetee(Request $request, Response $response): Response
    {
        return $response;
    }

    public function vueEnCoupe(Request $request, Response $response): Response
    {
        return $response;
    }

    public function avec2012(Request $request, Response $response): Response
    {
        return $response;
    }

    public function avec2015(Request $request, Response $response): Response
    {
        return $response;
    }

    public function perspective(Request $request, Response $response): Response
    {
        return $response;
    }

    public function standard(Request $request, Response $response): Response
    {
        return $response;
    }

    public function personnalisee(Request $request, Response $response): Response
    {
        return $response;
    }

    public function eclate(Request $request, Response $response): Response
    {
        return $response;
    }

    public function ecorche(Request $request, Response $response): Response
    {
        return $response;
    }

    public function detailAgrandi(Request $request, Response $response): Response
    {
        return $response;
    }

    public function cotation(Request $request, Response $response): Response
    {
        return $response;
    }

    public function insererLaCotation(Request $request, Response $response): Response
    {
        return $response;
    }

    public function coterALaMain(Request $request, Response $response): Response
    {
        return $response;
    }

    public function forcerLeSensDesFleches(Request $request, Response $response): Response
    {
        return $response;
    }

    public function nombreDeDecimales(Request $request, Response $response): Response
    {
        return $response;
    }

    public function modifierLesLignesDeRappel(Request $request, Response $response): Response
    {
        return $response;
    }

    public function rajouterDuTexte(Request $request, Response $response): Response
    {
        return $response;
    }

    public function erreursClassiques(Request $request, Response $response): Response
    {
        return $response;
    }

    public function croisementFlecheLigneRappel(Request $request, Response $response): Response
    {
        return $response;
    }

    public function valeursNonCentrees(Request $request, Response $response): Response
    {
        return $response;
    }

    public function ligneDeRappelDansLeVide(Request $request, Response $response): Response
    {
        return $response;
    }

    public function coteLoinDeSaForme(Request $request, Response $response): Response
    {
        return $response;
    }

    public function pointesDeFlecheAuMauvaisEndroit(Request $request, Response $response): Response
    {
        return $response;
    }

    public function coteEnDehorsDeLaZone(Request $request, Response $response): Response
    {
        return $response;
    }

    public function miseEnPage(Request $request, Response $response): Response
    {
        return $response;
    }

    public function deplacerLesVues(Request $request, Response $response): Response
    {
        return $response;
    }

    public function modifierLechelle(Request $request, Response $response): Response
    {
        return $response;
    }

    public function dessinDensemble(Request $request, Response $response): Response
    {
        return $response;
    }

    public function ajouterDesReperes(Request $request, Response $response): Response
    {
        return $response;
    }

    public function nomenclature(Request $request, Response $response): Response
    {
        return $response;
    }

    public function insererUnEclate(Request $request, Response $response): Response
    {
        return $response;
    }

    public function inclureUnEcorche(Request $request, Response $response): Response
    {
        return $response;
    }

    public function cartouche(Request $request, Response $response): Response
    {
        return $response;
    }

    public function exporterEnPdf(Request $request, Response $response): Response
    {
        return $response;
    }

    public function arbreDeCreation(Request $request, Response $response): Response
    {
        return $response;
    }

    public function lienFichierPieceAssemblage(Request $request, Response $response): Response
    {
        return $response;
    }
}
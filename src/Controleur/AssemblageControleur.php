<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class AssemblageControleur extends ArticleControleur
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

    public function assemblage(Request $request, Response $response): Response
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

    public function contraintes(Request $request, Response $response): Response
    {
        return $response;
    }

    public function appuiPlan(Request $request, Response $response): Response
    {
        return $response;
    }

    public function coaxialite(Request $request, Response $response): Response
    {
        return $response;
    }

    public function contraintesLimites(Request $request, Response $response): Response
    {
        return $response;
    }

    public function commentLesChoisir(Request $request, Response $response): Response
    {
        return $response;
    }

    public function arbreDeCreation(Request $request, Response $response): Response
    {
        return $response;
    }

    public function arbreVersZoneGraphique(Request $request, Response $response): Response
    {
        return $response;
    }

    public function zoneGraphiqueVersArbre(Request $request, Response $response): Response
    {
        return $response;
    }

    public function ouvrirSousEnsemble(Request $request, Response $response): Response
    {
        return $response;
    }

    public function cacherMontrerComposant(Request $request, Response $response): Response
    {
        return $response;
    }

    public function voirLesContraintes(Request $request, Response $response): Response
    {
        return $response;
    }

    public function configurations(Request $request, Response $response): Response
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
}
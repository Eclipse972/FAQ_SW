<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class PieceControleur extends ArticleControleur
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

    public function piece(Request $requete, Response $reponse): Response
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

    public function esquisse2d(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function barreDoutils(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function planDesquisse(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function cestQuoi(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function commentLeModifier(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function creerUnPlanDeToutePiece(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function parallele(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function parTroisPoints(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function autresProcedes(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function cotationIntelligente(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function surUnSegment(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function entreDeuxEntites(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function coterAuDiametre(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function contraindreUneEsquisse(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function listeDesContraintes(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function utiliserLesContraintes(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function lignesDeConstruction(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function codeCouleur(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function bleu(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function noir(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function gris(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function rouge(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function fonctions(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function extrusion(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function nomsDesIcones(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ajout(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function enlevement(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function casGeneral(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function cylindre(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function prisme(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function angleDeDepouille(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function enlevementDeMatiere(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function cestLeMemePrincipe(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function pieceFaiteEnFraisage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function revolution(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function piecesDeRevolution(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function lesquisse(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function revolutionPiece(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function sphere(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function troncDeCone(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function pieceFaiteEnTournage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function percageBorgne(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function pieceAvecChambrage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function realisationDuneGorge(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function balayage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function symetrie(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function repetitionLineaire(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function repetitionCirculaire(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function assistancePercage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ongletCaracteristiques(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function ongletPositionnement(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function percage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function trouTaraude(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function congeEtChanfrein(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function manipulerLaPiece(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function tournerEtDeplacer(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function couperLaPiece(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function suivantPlanDeReference(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function planParallele(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function suivantUnPlanCree(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function transparenceEtCouleur(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function arbreDeCreation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function zoneGraphiqueVersArbre(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }

    public function arbreVersZoneGraphique(Request $requete, Response $reponse): Response
    {
       return $this->renduPageEnConstruction($requete, $reponse);
    }
}
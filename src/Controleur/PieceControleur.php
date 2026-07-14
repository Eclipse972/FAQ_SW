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
		$this->hydrate('piece');
	}

    /**
     * Page d'accueil du module Pièce.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece
     */
    public function accueil(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'accueil');
    }

    /**
     * Menu et présentation de l'Esquisse 2D.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/esquisse-2d
     */
    public function esquisse2d(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'esquisse-2d');
    }

    /**
     * Guide d'utilisation des outils d'esquisse.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/esquisse-2d/outils-d-esquisse
     */
    public function barreDoutils(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'barre-doutils');
    }

    /**
     * Méthode de choix et de création d'un plan d'esquisse.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/esquisse-2d/plan-d-esquisse
     */
    public function planDesquisse(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'plan-desquisse');
    }

    /**
     * Utilisation de l'outil de cotation intelligente.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/esquisse-2d/cotation-intelligente
     */
    public function cotationIntelligente(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'cotation-intelligente');
    }

    /**
     * Définition et application d'une contrainte d'esquisse.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/esquisse-2d/contrainte-d-esquisse
     */
    public function contraindreUneEsquisse(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'contraindre-une-esquisse');
    }

    /**
     * Utilisation et rôle de la ligne de construction.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/esquisse-2d/ligne-de-construction
     */
    public function lignesDeConstruction(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'ligne-de-construction');
    }

    /**
     * Interprétation de l'état de l'esquisse via le code couleur.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/esquisse-2d/code-couleur
     */
    public function codeCouleur(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'code-couleur');
    }

    /**
     * Menu et liste des fonctions volumiques.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions
     */
    public function fonctions(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'fonctions');
    }

    /**
     * Création de volume par la fonction d'Extrusion.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/extrusion
     */
    public function extrusion(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'extrusion');
    }

    /**
     * Création de volume par la fonction de Révolution.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/revolution
     */
    public function revolution(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'revolution');
    }

    /**
     * Création de formes par balayage de profil.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/balayage
     */
    public function balayage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'balayage');
    }

    /**
     * Duplication d'éléments par symétrie.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/symetrie
     */
    public function symetrie(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'symetrie');
    }

    /**
     * Répétition linéaire de fonctions ou de faces.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/repetition-lineaire
     */
    public function repetitionLineaire(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'repetition-lineaire');
    }

    /**
     * Répétition circulaire autour d'un axe de référence.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/repetition-circulaire
     */
    public function repetitionCirculaire(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'repetition-circulaire');
    }

    /**
     * Réalisation de trous normés avec l'assistance pour perçage.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/assistance-percage
     */
    public function assistancePercage(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'assistance-percage');
    }

    /**
     * Application de congés ou de chanfreins sur les arêtes.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/fonctions/conge-et-chanfrein
     */
    public function congeEtChanfrein(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'conge-et-chanfrein');
    }

    /**
     * Menu présentant la construction des volumes élémentaires.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires
     */
    public function volumesElementaires(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'volumes-elementaires');
    }

    /**
     * Conception d'un prisme droit.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires/prisme-droit
     */
    public function prisme(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'prisme');
    }

    /**
     * Conception d'un cylindre par extrusion.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires/cylindre-par-extrusion
     */
    public function cylindre(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'cylindre');
    }

    /**
     * Conception d'une sphère complète.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires/sphere
     */
    public function sphere(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'sphere');
    }

    /**
     * Conception d'un tronc de cône par révolution.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires/tronc-de-cone-par-revolution
     */
    public function troncDeCone(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'tronc-de-cone');
    }

    /**
     * Conception d'un tronc de cône par extrusion.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires/tronc-de-cone-par-extrusion
     */
    public function troncDeConeExtrusion(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'tronc-de-cone-extrusion');
    }

    /**
     * Conception d'un tore par révolution d'un cercle.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires/tore
     */
    public function tore(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'tore');
    }

    /**
     * Menu des outils pour manipuler la pièce.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/manipuler
     */
    public function manipulerLaPiece(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'manipuler-la-piece');
    }

    /**
     * Outils et raccourcis pour tourner et déplacer le modèle.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/manipuler/tourner-et-deplacer
     */
    public function tournerEtDeplacer(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'tourner-et-deplacer');
    }

    /**
     * Techniques pour couper une pièce avec un plan de section.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/manipuler/couper-une-piece
     */
    public function couperLaPiece(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'couper-la-piece');
    }

    /**
     * Personnalisation du rendu par la transparence ou couleur.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/manipuler/transparence-ou-couleur
     */
    public function transparenceEtCouleur(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'transparence-et-couleur');
    }

    /**
     * Menu d'exploration de l'arbre de création FeatureManager.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/arbre-creation
     */
    public function arbreDeCreation(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'arbre-de-creation');
    }

    /**
     * Comprendre la liaison entre l'arbre et la zone graphique.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/arbre-creation/liaison-arbre-zone-graphique
     */
    public function arbreVersZoneGraphique(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'arbre-vers-zone-graphique');
    }

    /**
     * Comprendre la liaison entre la zone graphique et l'arbre.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/arbre-creation/liaison-zone-graphique-arbre
     */
    public function zoneGraphiqueVersArbre(Request $requete, Response $reponse): Response
    {
       return $this->renduPageOrdinaire($reponse, 'zone-graphique-vers-arbre');
    }
}
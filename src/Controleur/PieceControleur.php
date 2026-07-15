<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class PieceControleur extends OngletControleur
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
	 * La page d'accueil utlise la méthode définie dans la classe-mère
	 * Donc de script de vérification des routes indiquera un erreur pour ce controleur
	 */

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
        return $this->vue->render($reponse, '113-volume-elementaire.html.twig', [
            'onglet'				=> $this->onglet,
            'titre'					=> 'Prisme droit',
            'image_piece'			=> '/images/Piece/prisme/VEcote.png',
            'image_esquisse'		=> '/images/Piece/prisme/esquisse.png',
            'icone_principale'		=> '/images/Piece/prisme/icone.png',
            'nom_icone_principale'	=> 'rectangle par sommet',
            'par_revolution'		=> false,
            'url_animation_esquisse'=> '#',
            'url_animation_fonction'=> '#',
        ]);
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
    public function cylindreExtrusion(Request $requete, Response $reponse): Response
    {
        return $this->vue->render($reponse, '113-volume-elementaire.html.twig', [
            'onglet'				=> $this->onglet,
            'titre'					=> 'Cylindre par extrusion',
            'image_piece'			=> '/images/Piece/cylindre/VEcote.png',
            'image_esquisse'		=> '/images/Piece/cylindre/esquisse.png',
            'icone_principale'		=> '/images/Piece/cylindre/icone.png',
            'nom_icone_principale'	=> 'cercle par son centre',
            'par_revolution'		=> false,
            'url_animation_esquisse'=> '#',
            'url_animation_fonction'=> '#',
        ]);
    }

    /**
     * Conception d'un cylindre par révolution.
     *
     * @param Request $requete
     * @param Response $reponse
     * @return Response
     *
     * @route /piece/volumes-elementaires/cylindre-par-revolution
     */
    public function cylindreRevolution(Request $requete, Response $reponse): Response
    {
        return $this->vue->render($reponse, '113-volume-elementaire.html.twig', [
            'onglet'				=> $this->onglet,
            'titre'					=> 'Cylindre par révolution',
            'image_piece'			=> '/images/Piece/cylindre2/VEcote.png',
            'image_esquisse'		=> '/images/Piece/cylindre2/esquisse.png',
            'icone_principale'		=> '/images/Piece/cylindre2/icone.png',
            'nom_icone_principale'	=> 'rectangle par sommet',
            'par_revolution'		=> true,
            'url_animation_esquisse'=> '#',
            'url_animation_fonction'=> '#',
        ]);
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
        return $this->vue->render($reponse, '113-volume-elementaire.html.twig', [
            'onglet'				=> $this->onglet,
            'titre'					=> 'Sphère',
            'image_piece'			=> '/images/Piece/sphere/VEcote.png',
            'image_esquisse'		=> '/images/Piece/sphere/esquisse.png',
            'icone_principale'		=> '/images/Piece/sphere/icone.png',
            'nom_icone_principale'	=> 'cercle par son centre',
            'icone_secondaire'		=> '/images/Piece/sphere/icone2.png',
            'par_revolution'		=> true,
            'url_animation_esquisse'=> '#',
            'url_animation_fonction'=> '#',
        ]);
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
        return $this->vue->render($reponse, '113-volume-elementaire.html.twig', [
            'onglet'				=> $this->onglet,
            'titre'					=> 'Tronc de cône par révolution',
            'image_piece'			=> '/images/Piece/tronc2cone/VEcote.png',
            'image_esquisse'		=> '/images/Piece/tronc2cone/esquisse.png',
            'icone_principale'		=> '/images/Piece/tronc2cone/icone.png',
            'nom_icone_principale'	=> 'ligne',
            'par_revolution'		=> true,
            'url_animation_esquisse'=> '#',
            'url_animation_fonction'=> '#',
        ]);
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
        return $this->vue->render($reponse, '113-volume-elementaire.html.twig', [
            'onglet'				=> $this->onglet,
            'titre'					=> 'Tronc de cône par extrusion',
            'image_piece'			=> '/images/Piece/tronc2cone2/VEcote.png',
            'image_esquisse'		=> '/images/Piece/tronc2cone2/esquisse.png',
            'icone_principale'		=> '/images/Piece/tronc2cone2/icone.png',
            'nom_icone_principale'	=> 'cercle par son centre',
            'par_revolution'		=> false,
            'cas_depouille'			=> true,
            'url_animation_esquisse'=> '#',
            'url_animation_fonction'=> '#',
        ]);
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
        return $this->vue->render($reponse, '113-volume-elementaire.html.twig', [
            'onglet'				=> $this->onglet,
            'titre'					=> 'Tore',
            'image_piece'			=> '/images/Piece/tore/VEcote.png',
            'image_esquisse'		=> '/images/Piece/tore/esquisse.png',
            'icone_principale'		=> '/images/Piece/tore/icone.png',
            'nom_icone_principale'	=> 'cercle par son centre',
            'par_revolution'		=> true,
            'url_animation_esquisse'=> '#',
            'url_animation_fonction'=> '#',
        ]);
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
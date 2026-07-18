<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use FaqSolidworks\Modele\Lien;

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
     * @route /piece/esquisse-2d
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function esquisse2d(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Esquisse", 'c_Sketch');

		return $this->renduPageOrdinaire($reponse, 'esquisse-2d', Lien::obtenir());
    }

    /**
     * Guide d'utilisation des outils d'esquisse.
	 *
     * @route /piece/esquisse-2d/outils-d-esquisse
     *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function barreDoutils(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Barre d'outils Esquisse", 'r_sketch_toolbar');

    	return $this->renduPageOrdinaire($reponse, 'barre-doutils', Lien::obtenir());
    }

    /**
     * Méthode de choix et de création d'un plan d'esquisse.
     *
     * @route /piece/esquisse-2d/plan-d-esquisse
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function planDesquisse(Request $requete, Response $reponse): Response
    {
 		Lien::creer();
		Lien::ajouterAideSW("Où commencer une esquisse", 'c_Where_to_Start_a_Sketch');
		Lien::ajouterAideSW("Esquisse avec Entités d'esquisse ou Outil d'esquisse", 't_sketching_sketch_entities_tool');
		Lien::ajouterAideSW("Esquisse avec des plans", 't_sketching_with_planes');

    	return $this->renduPageOrdinaire($reponse, 'plan-desquisse', Lien::obtenir());
    }

    /**
     * Utilisation de l'outil de cotation intelligente.
     *
     * @route /piece/esquisse-2d/cotation-intelligente
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function cotationIntelligente(Request $requete, Response $reponse): Response
    {
  		Lien::creer();
		Lien::ajouterAideSW("Coter une esquisse 2D", 't_Dimensioning_a_2D_Sketch');

    	return $this->renduPageOrdinaire($reponse, 'cotation-intelligente', Lien::obtenir());
    }

    /**
     * Définition et application d'une contrainte d'esquisse.
     *
     * @route /piece/esquisse-2d/contrainte-d-esquisse
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function contraindreUneEsquisse(Request $requete, Response $reponse): Response
    {
  		Lien::creer();
		Lien::ajouterAideSW("Icônes de contraintes dans l'arbre de création FeatureManager", 'r_mate_icons_featuremanager_design_tree');

    	return $this->renduPageOrdinaire($reponse, 'contraindre-une-esquisse', Lien::obtenir());
    }

    /**
     * Utilisation et rôle de la ligne de construction.
     *
     * @route /piece/esquisse-2d/ligne-de-construction
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function lignesDeConstruction(Request $requete, Response $reponse): Response
    {
 		Lien::creer();
		Lien::ajouterAideSW("Lignes de construction", 'c_centerlines');
		Lien::ajouterAideSW("Utilisation de lignes de construction pour créer des cotes radiales et de diamètre", 't_dimensioning_centerlines');

       return $this->renduPageOrdinaire($reponse, 'ligne-de-construction', Lien::obtenir());
    }

    /**
     * Interprétation de l'état de l'esquisse via le code couleur.
     *
     * @route /piece/esquisse-2d/code-couleur
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function codeCouleur(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Statut de la géométrie d'esquisse", 'c_sketch_geometry_status');

    	return $this->renduPageOrdinaire($reponse, 'code-couleur', Lien::obtenir());
    }

    /**
     * Menu et liste des fonctions volumiques.
     *
     * @route /piece/fonctions
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function fonctions(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Barre d'outils Fonctions", 'r_Features_Toolbar_features');

    	return $this->renduPageOrdinaire($reponse, 'fonctions', Lien::obtenir());
    }

    /**
     * Création de volume par la fonction d'Extrusion.
     *
     * @route /piece/fonctions/extrusion
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function extrusion(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Extrusions", 'Hidd_dve_end_spec_dlg');
		Lien::ajouter("prisme droit", '/piece/volumes-elementaires/prisme-droit');
		Lien::ajouter("cylindre par extrrusion", '/piece/volumes-elementaires/cylindre-par-extrusion');
		Lien::ajouter("tronc de cône par extrrusion", '/piece/volumes-elementaires/tronc-de-cone-par-extrusion');

		return $this->renduPageOrdinaire($reponse, 'extrusion', Lien::obtenir());
    }

    /**
     * Création de volume par la fonction de Révolution.
     *
     * @route /piece/fonctions/revolution
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function revolution(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Révolutions", 'c_Revolves_Folder');
		Lien::ajouter("cylindre par révolution", '/piece/volumes-elementaires/cylindre-par-revolution');
		Lien::ajouter("tronc de cône par révolution", '/piece/volumes-elementaires/tronc-de-cone-par-revolution');
		Lien::ajouter("sphère", '/piece/volumes-elementaires/sphere');
		Lien::ajouter("tore", '/piece/volumes-elementaires/tore');

		return $this->renduPageOrdinaire($reponse, 'revolution', Lien::obtenir());
    }

    /**
     * Création de formes par balayage de profil.
     *
     * @route /piece/fonctions/balayage
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function balayage(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Balayages", 'HIDD_DVE_FEAT_SWEEP');

		return $this->renduPageOrdinaire($reponse, 'balayage', Lien::obtenir());
    }

    /**
     * Duplication d'éléments par symétrie.
     *
     * @route /piece/fonctions/symetrie
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function symetrie(Request $requete, Response $reponse): Response
    {
 		Lien::creer();
		Lien::ajouterAideSW("Fonction de symétrie", 'c_Mirror_Feature_Overview');

		return $this->renduPageOrdinaire($reponse, 'symetrie', Lien::obtenir());
    }

    /**
     * Répétition linéaire de fonctions ou de faces.
     *
     * @route /piece/fonctions/repetition-lineaire
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function repetitionLineaire(Request $requete, Response $reponse): Response
    {
 		Lien::creer();
		Lien::ajouterAideSW("Répétitions linéaires et le PropertyManager Répétition linéaire", 't_Linear_Patterns_Overview');

		return $this->renduPageOrdinaire($reponse, 'repetition-lineaire', Lien::obtenir());
    }

    /**
     * Répétition circulaire autour d'un axe de référence.
     *
     * @route /piece/fonctions/repetition-circulaire
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function repetitionCirculaire(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Le PropertyManager Répétition circulaire", 'HIDD_CPATTERN');

		return $this->renduPageOrdinaire($reponse, 'repetition-circulaire', Lien::obtenir());
    }

    /**
     * Réalisation de trous normés avec l'assistance pour perçage.
     *
     * @route /piece/fonctions/assistance-percage
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function assistancePercage(Request $requete, Response $reponse): Response
    {
		Lien::creer();
		Lien::ajouterAideSW("Présentation de l'Assistance pour le perçage", 'c_Hole_Wizard_Overview');

		return $this->renduPageOrdinaire($reponse, 'assistance-percage', Lien::obtenir());
    }

    /**
     * Application de congés ou de chanfreins sur les arêtes.
     *
     * @route /piece/fonctions/conge-et-chanfrein
	 *
     * @param Request $requete
     * @param Response $reponse
	 *
     * @return Response
     */
    public function congeEtChanfrein(Request $requete, Response $reponse): Response
    {
 		Lien::creer();
		Lien::ajouterAideSW("Vue d'ensemble des congés", 'c_fillet_overview');
		Lien::ajouterAideSW("Chanfreins", 't_creating_chamfer_feature');

		return $this->renduPageOrdinaire($reponse, 'conge-et-chanfrein', Lien::obtenir());
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
		Lien::creer();
		Lien::ajouterAideSW("rectangle par sommets",		't_Sketching_Corner_Rectangles');
		Lien::ajouterAideSW("Coter une esquisse 2D",		't_Dimensioning_a_2D_Sketch');
		Lien::ajouterAideSW("Extrusions",					'Hidd_dve_end_spec_dlg');
		Lien::ajouterAideSW("Le PropertyManager Extrusion",	'r_extrude_propertymanager');

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
            'liens_connexes'		=> Lien::obtenir(),
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
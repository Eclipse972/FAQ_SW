<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class AutreControleur extends OngletControleur
{
	/**
	 * Constructeur
	 *
	 * @param Twig $vue Moteur de templates Twig
	 */
	public function __construct(Twig $vue)
	{
		parent::__construct($vue);
		$this->hydrate('autre');
	}

	/**
	 * Accueil de l'onglet "Autre".
	 *
	 * @route /autre
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function accueil(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'accueil');
	}

	/**
	 * Ouvrir un fichier.
	 *
	 * @route /autre/ouvrir-un-fichier
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function ouvrirFichier(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'ouvrir-un-fichier');
	}

	/**
	 * Menu Zoom.
	 *
	 * @route /autre/zoom
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function zoom(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'zoom');
	}

	/**
	 * Zoom fenêtre.
	 *
	 * @route /autre/zoom/zoom-fenetre
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function zoomFenetre(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'zoom-fenetre');
	}

	/**
	 * Ajuster le zoom.
	 *
	 * @route /autre/zoom/ajuster-le-zoom
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function ajusterZoom(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'ajuster-le-zoom');
	}

	/**
	 * Zoom au mieux.
	 *
	 * @route /autre/zoom/zoom-au-mieux
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function zoomAuMieux(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'zoom-au-mieux');
	}

	/**
	 * Déplacer la vue.
	 *
	 * @route /autre/zoom/deplacer-la-vue
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function deplacerVue(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'deplacer-la-vue');
	}

	/**
	 * Menu Export eDrawing.
	 *
	 * @route /autre/export-edrawing
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function exportEdrawing(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'export-edrawing');
	}

	/**
	 * Export eDrawing pour une pièce.
	 *
	 * @route /autre/export-edrawing/piece
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function exportEdrawingPiece(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'piece');
	}

	/**
	 * Export eDrawing pour un assemblage.
	 *
	 * @route /autre/export-edrawing/assemblage
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function exportEdrawingAssemblage(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'assemblage');
	}

	/**
	 * Export eDrawing pour une mise en plan.
	 *
	 * @route /autre/export-edrawing/mise-en-plan
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function exportEdrawingMiseEnPlan(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'mise-en-plan');
	}

	/**
	 * Casier numérique.
	 *
	 * @route /autre/casier-numerique
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function casierNumerique(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'casier-numerique');
	}

	/**
	 * Mécanique graphique.
	 *
	 * @route /autre/mecanique-graphique
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function mecaniqueGraphique(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'mecanique-graphique');
	}

	/**
	 * Résolution PFS 3 forces.
	 *
	 * @route /autre/mecanique-graphique/pfs-3-forces
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function resolutionPFS3forces(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'pfs-3-forces');
	}

	/**
	 * Équilibre projectivité.
	 *
	 * @route /autre/mecanique-graphique/equi-projectivite
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function equiProjectivite(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'equi-projectivite');
	}

	/**
	 * Champ vecteur vitesse.
	 *
	 * @route /autre/mecanique-graphique/champ-vecteur-vitesse
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function champVecteurVitesse(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'champ-vecteur-vitesse');
	}
}
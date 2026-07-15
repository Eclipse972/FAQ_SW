<?php

declare(strict_types=1);

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class MiseEnPlanControleur extends OngletControleur
{
	/**
	 * Constructeur
	 *
	 * @param Twig $vue Moteur de templates Twig
	 */
	public function __construct(Twig $vue)
	{
		parent::__construct($vue);
		$this->hydrate('mise-en-plan');
	}

	/**
	 * Accueil de l'onglet "Mise en plan".
	 *
	 * @route /mise-en-plan
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
	 * Fond de plan.
	 *
	 * @route /mise-en-plan/fond-de-plan
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function fondDePlan(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'fond-de-plan');
	}

	/**
	 * Cartouche.
	 *
	 * @route /mise-en-plan/cartouche
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function cartouche(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'cartouche');
	}

	/**
	 * Arbre de création.
	 *
	 * @route /mise-en-plan/arbre-de-creation
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function arbreDeCreation(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'arbre-de-creation');
	}

	/**
	 * Lien fichier pièce/assemblage.
	 *
	 * @route /mise-en-plan/lien-fichier-piece-assemblage
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function lienFichierPieceAssemblage(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'lien-fichier-piece-assemblage');
	}

	// ----- VUES -----

	/**
	 * Menu Vues.
	 *
	 * @route /mise-en-plan/vues
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function vues(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'vues');
	}

	/**
	 * Vue projetée.
	 *
	 * @route /mise-en-plan/vues/vue-standard
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function vueStandard(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'vues-standard');
	}

	/**
	 * Vue projetée.
	 *
	 * @route /mise-en-plan/vues/vue-projetee
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function vueProjetee(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'vue-projetee');
	}

	/**
	 * Éclaté.
	 *
	 * @route /mise-en-plan/vues/eclate
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function eclate(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'eclate');
	}

	/**
	 * Écorché.
	 *
	 * @route /mise-en-plan/vues/ecorche
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function ecorche(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'ecorche');
	}

	/**
	 * Détail agrandi.
	 *
	 * @route /mise-en-plan/vues/detail-agrandi
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function detailAgrandi(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'detail-agrandi');
	}

	/**
	 * Vue en coupe.
	 *
	 * @route /mise-en-plan/vues/vue-en-coupe
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function vueEnCoupe(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'vue-en-coupe');
	}

	/**
	 * Perspectives.
	 *
	 * @route /mise-en-plan/vues/perspective
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function perspective(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'perspective');
	}

	// ----- COTATION -----

	/**
	 * Menu Cotation.
	 *
	 * @route /mise-en-plan/cotation
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function cotation(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'cotation');
	}

	/**
	 * Insérer la cotation.
	 *
	 * @route /mise-en-plan/cotation/inserer-la-cotation
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function insererLaCotation(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'inserer-la-cotation');
	}

	/**
	 * Coter à la main.
	 *
	 * @route /mise-en-plan/cotation/coter-a-la-main
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function coterALaMain(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'coter-a-la-main');
	}

	/**
	 * Forcer le sens des flèches.
	 *
	 * @route /mise-en-plan/cotation/forcer-le-sens-des-fleches
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function forcerLesensFleches(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'forcer-le-sens-des-fleches');
	}

	/**
	 * Nombre de décimales.
	 *
	 * @route /mise-en-plan/cotation/nombre-de-decimales
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function nombreDeDecimales(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'nombre-de-decimales');
	}

	/**
	 * Modifier les lignes de rappel.
	 *
	 * @route /mise-en-plan/cotation/modifier-les-lignes-de-rappel
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function modifierLignesDeRappel(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'modifier-les-lignes-de-rappel');
	}

	/**
	 * Rajouter du texte.
	 *
	 * @route /mise-en-plan/cotation/rajouter-du-texte
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function rajouterDuTexte(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'rajouter-du-texte');
	}

	/**
	 * Erreurs classiques.
	 *
	 * @route /mise-en-plan/cotation/erreurs-classiques
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function erreursClassiques(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'erreurs-classiques');
	}

	// ----- DESSIN D'ENSEMBLE -----

	/**
	 * Menu Dessin d'ensemble.
	 *
	 * @route /mise-en-plan/dessin-densemble
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function dessinDensemble(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'dessin-densemble');
	}

	/**
	 * Ajouter des repères.
	 *
	 * @route /mise-en-plan/dessin-densemble/ajouter-des-reperes
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function ajouterDesReperes(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'ajouter-des-reperes');
	}

	/**
	 * Nomenclature.
	 *
	 * @route /mise-en-plan/dessin-densemble/nomenclature
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function nomenclature(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'nomenclature');
	}

	/**
	 * Insérer un éclaté.
	 *
	 * @route /mise-en-plan/dessin-densemble/inserer-un-eclate
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function insererUnEclate(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'inserer-un-eclate');
	}

	/**
	 * Inclure un écorché.
	 *
	 * @route /mise-en-plan/dessin-densemble/inclure-un-ecorche
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function inclureUnEcorche(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'inclure-un-ecorche');
	}

	// ----- MISE EN PAGE / EXPORT -----

	/**
	 * Mise en page.
	 *
	 * @route /mise-en-plan/mise-en-page
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function miseEnPage(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'mise-en-page');
	}

	/**
	 * Exporter en PDF.
	 *
	 * @route /mise-en-plan/exporter-en-pdf
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function exporterEnPdf(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'exporter-en-pdf');
	}

}
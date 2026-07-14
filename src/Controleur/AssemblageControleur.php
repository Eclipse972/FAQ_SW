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
		$this->hydrate('assemblage');
	}

	/**
	 * Accueil assemblage.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage
	 */
	public function accueil(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'accueil');
	}

	/**
	 * Menu des contraintes.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/contraintes
	 */
	public function contraintes(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'contraintes');
	}

	/**
	 * Contrainte d'appui plan.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/contraintes/appui-plan
	 */
	public function appuiPlan(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'appui-plan');
	}

	/**
	 * Contrainte de coaxialité.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/contraintes/coaxialite
	 */
	public function coaxialite(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'coaxialite');
	}

	/**
	 * Contraintes limites.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/contraintes/contraintes-limites
	 */
	public function contraintesLimites(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'contraintes-limites');
	}

	/**
	 * Comment choisir ses contraintes.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/contraintes/comment-les-choisir
	 */
	public function commentLesChoisir(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'comment-les-choisir');
	}

	/**
	 * Menu arbre de création.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/arbre-de-creation
	 */
	public function arbreDeCreation(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'arbre-de-creation');
	}

	/**
	 * Liaison arbre vers zone graphique.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/arbre-de-creation/arbre-zone-graphique
	 */
	public function liaisonArbreZoneGraphique(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'arbre-zone-graphique');
	}

	/**
	 * Liaison zone graphique vers arbre.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/arbre-de-creation/zone-graphique-arbre
	 */
	public function LiaisonZoneGraphiqueArbre(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'zone-graphique-arbre');
	}

	/**
	 * Ouvrir un sous-ensemble.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/arbre-de-creation/ouvrir-sous-ensemble
	 */
	public function ouvrirSousEnsemble(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'ouvrir-sous-ensemble');
	}

	/**
	 * Cacher ou montrer un composant.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/arbre-de-creation/cacher-montrer-composant
	 */
	public function cacherMontrerComposant(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'cacher-montrer-composant');
	}

	/**
	 * Voir les contraintes.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/arbre-de-creation/voir-les-contraintes
	 */
	public function voirLesContraintes(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'voir-les-contraintes');
	}

	/**
	 * Les configurations.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/configurations
	 */
	public function configurations(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'configurations');
	}

	/**
	 * Créer un éclaté.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/creer-un-eclate
	 */
	public function eclate(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'creer-un-eclate');
	}

	/**
	 * Créer un écorché.
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 *
	 * @route /assemblage/creer-un-ecorche
	 */
	public function ecorche(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'creer-un-ecorche');
	}
}
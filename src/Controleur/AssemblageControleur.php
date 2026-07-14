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
	 * @route /assemblage
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
	 * Menu des contraintes.
	 *
	 * @route /assemblage/contraintes
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function contraintes(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'contraintes');
	}

	/**
	 * Contrainte d'appui plan.
	 *
	 * @route /assemblage/contraintes/appui-plan
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function appuiPlan(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'appui-plan');
	}

	/**
	 * Contrainte de coaxialité.
	 *
	 * @route /assemblage/contraintes/coaxialite
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function coaxialite(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'coaxialite');
	}

	/**
	 * Contraintes limites.
	 *
	 * @route /assemblage/contraintes/contraintes-limites
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function contraintesLimites(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'contraintes-limites');
	}

	/**
	 * Comment choisir ses contraintes.
	 *
	 * @route /assemblage/contraintes/comment-les-choisir
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function commentLesChoisir(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'comment-les-choisir');
	}

	/**
	 * Menu arbre de création.
	 *
	 * @route /assemblage/arbre-de-creation
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
	 * Liaison arbre vers zone graphique.
	 *
	 * @route /assemblage/arbre-de-creation/arbre-zone-graphique
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function liaisonArbreZoneGraphique(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'arbre-zone-graphique');
	}

	/**
	 * Liaison zone graphique vers arbre.
	 *
	 * @route /assemblage/arbre-de-creation/zone-graphique-arbre
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function LiaisonZoneGraphiqueArbre(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'zone-graphique-arbre');
	}

	/**
	 * Ouvrir un sous-ensemble.
	 *
	 * @route /assemblage/arbre-de-creation/ouvrir-sous-ensemble
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function ouvrirSousEnsemble(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'ouvrir-sous-ensemble');
	}

	/**
	 * Cacher ou montrer un composant.
	 *
	 * @route /assemblage/arbre-de-creation/cacher-montrer-composant
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function cacherMontrerComposant(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'cacher-montrer-composant');
	}

	/**
	 * Voir les contraintes.
	 *
	 * @route /assemblage/arbre-de-creation/voir-les-contraintes
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function voirLesContraintes(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'voir-les-contraintes');
	}

	/**
	 * Les configurations.
	 *
	 * @route /assemblage/configurations
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function configurations(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'configurations');
	}

	/**
	 * Créer un éclaté.
	 *
	 * @route /assemblage/creer-un-eclate
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function eclate(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'creer-un-eclate');
	}

	/**
	 * Créer un écorché.
	 *
	 * @route /assemblage/creer-un-ecorche
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 * @return Response
	 */
	public function ecorche(Request $requete, Response $reponse): Response
	{
		return $this->renduPageOrdinaire($reponse, 'creer-un-ecorche');
	}
}
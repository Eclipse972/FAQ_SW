<?php

namespace FaqSolidworks\Controleur;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

/**
 * Contrôleur des pages de vidéos.
 *
 * Une vidéo n'appartient à aucun onglet : ce contrôleur n'hérite donc pas
 * d'OngletControleur. Chaque vidéo a sa route et sa méthode, qui connaît
 * ses propres paramètres.
 *
 * Les fichiers d'une vidéo partagent le même nom de base :
 *  - /videos/<fichier>.mp4 : la vidéo
 *  - /JS/<fichier>.js      : les données Wink (variable globale winkVideoData)
 */
class VideoControleur
{
	/**
	 * Constructeur : injection du moteur de templates.
	 *
	 * @param Twig $vue Moteur de templates Twig
	 */
	public function __construct(private Twig $vue) {}

	/**
	 * Comment choisir le plan d'esquisse.
	 *
	 * @route /video/plan-d-esquisse
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 *
	 * @return Response
	 */
	public function planDesquisse(Request $requete, Response $reponse): Response
	{
		return $this->renduVideo(
			$requete,
			$reponse,
			"Choisir le plan d'esquisse",
			'planDesquisse',
			'/piece/esquisse-2d/plan-d-esquisse'
		);
	}

	/**
	 * Comment créer l'esquisse d'un cylindre par extrusion.
	 *
	 * @route /video/esquisse-cylindre-par-extrusion
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 *
	 * @return Response
	 */
	public function esquisseCylindreExtrusion(Request $requete, Response $reponse): Response
	{
		return $this->renduVideo(
			$requete,
			$reponse,
			"Créer l'esquisse d'un cylindre par extrusion",
			'esquisseCylindreExtrusion',
			'/piece/volumes-elementaires/cylindre-par-extrusion'
		);
	}

	/**
	 * Comment créer un cylindre par extrusion à partir de son esquisse.
	 *
	 * @route /video/fonction-cylindre-par-extrusion
	 *
	 * @param Request $requete
	 * @param Response $reponse
	 *
	 * @return Response
	 */
	public function fonctionCylindreExtrusion(Request $requete, Response $reponse): Response
	{
		return $this->renduVideo(
			$requete,
			$reponse,
			"Créer un cylindre par extrusion",
			'fonctionCylindreExtrusion',
			'/piece/volumes-elementaires/cylindre-par-extrusion'
		);
	}

	/**
	 * Rendu commun à toutes les vidéos.
	 *
	 * @param Request  $requete
	 * @param Response $reponse
	 * @param string   $titre         Titre affiché sur la page
	 * @param string   $fichier       Nom de base des fichiers .mp4 et .js
	 * @param string   $retour_defaut URL de retour par défaut
	 *
	 * @return Response
	 */
	private function renduVideo(
		Request $requete,
		Response $reponse,
		string $titre,
		string $fichier,
		string $retour_defaut
	): Response {
		// URL canonique : absolue et sans paramètre
		$url_canonique = (string) $requete->getUri()->withQuery('')->withFragment('');

		return $this->vue->render($reponse, '14-video.html.twig', [
			'titre'         => $titre,
			'url_mp4'       => '/videos/' . $fichier . '.mp4',
			'url_donnees'   => '/JS/' . $fichier . '.js',
			'url_retour'    => $retour_defaut,
			'url_canonique' => $url_canonique,
		]);
	}
}

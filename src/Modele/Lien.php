<?php

namespace FaqSolidworks\Modele;

/**
 * Représente une liste de liens associés à un support technique.
 *
 * Classe statique : une seule liste de liens par requête.
 * Appeler creer() avant d'ajouter les liens.
 *
 * Contient la liste des liens sous forme de tableaux associatifs avec les clés : texte, url.
 *
 * @example
 *	Lien::creer();
 *	Lien::ajouter('Documentation officielle', 'https://example.com',         );
 *	Lien::ajouter('Fiche fournisseur', 'https://example.com/contact');
 *
 *     return $this->renduApropos($reponse, 'archive.zip', ['Contient les fichiers CAO'], Lien::obtenir());
 */
class Lien
{
	/** @var array<int, array{texte: string, url: string}> */
	private static array $liens;

	/**
	 * Initialise une nouvelle liste de liens vide.
	 *
	 * À appeler obligatoirement avant d'ajouter le premier lien.
	 *
	 * @example
	 * Lien::creer();
	 */
	public static function creer(): void
	{
		self::$liens = [];
	}

	/**
	 * Ajoute un lien à la liste.
	 *
	 * @param string $texte Texte à afficher
	 * @param string $url   URL du lien
	 *
	 * @example
	 * Lien::ajouter('Accueil', 'https://example.com');
	 * Lien::ajouter('Contact', 'https://example.com/contact');
	 */
	public static function ajouter(string $texte, string $url): void
	{
		self::$liens[] = [
			'texte' => $texte,
			'url'   => $url,
		];
	}

	/**
	 * Ajoute un lien vers l'aide de SolidWorks.
	 *
	 * L'URL étant longue seule la page est demandée. Lafonction s'occupe de créer l'URL complète
	 *
	 * @param string $texte
	 * @param string $page	page html dans l'aide en ligne de Solidwors
	 *
	 * @example
	 * Lien::ajouterAideSW("barre d'outils", 'r_sketch_toolbar');
	 * Lien::ajouterAideSW("Icônes des relations d'esquisse"", 'c_sketch_relations_icons');
	 */
	public static function ajouterAideSW(string $texte, string $page): void
	{
		$annee = 2021;

		self::ajouter(
			"Aide SW ($annee): $texte",
			"http://help.solidworks.com/$annee/french/SolidWorks/sldworks/$page.htm"
		);
	}

	/**
	 * Retourne la liste des liens dans l'ordre d'ajout.
	 *
	 * @return array<int, array{url: string, texte: string}>
	 */
	public static function obtenir(): array
	{
		return self::$liens;
	}

	/**
	 * Indique si la liste est vide.
	 *
	 * @example
	 * if (Lien::estVide()) {
	 *     // pas de section liens dans le template
	 * }
	 */
	public static function estVide(): bool
	{
		return empty(self::$liens);
	}
}

<?php		// APIs de PEUNC
namespace PEUNC\classes;

interface iPage	{
/* Chaque page est entièrement construite avant le moindre affichage. L'hydratation de la page se fait à partir d'un controleur.
 * Une fois la page construite on injecte le code dans le fichier doctype.html. Ce fichier ne fait qu'utiliser les différentes
 * assesseurs (getter)) de la classe.
*/

// Mutateur (getters)
	public function getCSS();			// affiche le code pour utiliser toutes les feuilles CSS associée à la page
	public function getTitle();			// affiche le titre du document (qui est affiché dans la barre de titre du navigateur ou dans l'onglet de la page)
	public function getHeaderText();	// en-tête de la page
	public function getLogo();			// affiche l'adresse du logo
	public function getSection();		// affiche le code du corps de la page
	public function getFooter();		//	pied de page

// Assesseurs (setters)
	public function setCSS(array $tableau);	// affiche le code pour utiliser toutes les feuilles CSS associée à la page
	public function setTitle($titre);		// affiche le titre du document (qui est affiché dans la barre de titre du navigateur ou dans l'onglet de la page)
	public function setHeaderText($texte);	// en-tête de la page
	public function setLogo($logo);			// logo
	public function setSection($code);		// affiche le code du corps de la page
	public function setFooter($code);		//	pied de page

// Affichage
	public static function BaliseImage($src, $alt, $code);	// insère une image en tenant compte du répertoire image. Seul le premier paramètre est obligatoire

}

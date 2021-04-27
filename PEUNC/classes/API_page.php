<?php		// APIs de PEUNC
namespace PEUNC\classes;

interface iPage	{
// Chaque page est entièrement construite avant le moindre affichage. L'hydratation de l'objet page se fait à partir de a BDD principalement. Une fois la page construite on injecte le code dans le fichier doctype.html. Ce fichier ne fait qu'utiliser les différentes méthodes de la classe page (getter).

// Présentation dans l'ordre d'apparition dans le code de doctype.html. Ce sont uniquement des méthodes de sortie (getter).
// Cf PEUNC/classes/Page.php pour plus de précisions.

// <head>
	public function CSS();				// affiche le code pour utiliser toutes les feuilles CSS associée à la page
	//public function headTitre();		// affiche le titre du document (qui est affiché dans la barre de titre du navigateur ou dans l'onglet de la page)

// <header>
	public function EntetePage();		// en-tête de la page
	public function LogoPage();			// logo

// <nav>
	public function Menu();				// génère le menu sur 2 niveaux avec les pages de niveau 2 et 3.

// <section>
	public function Section();			// affiche le code du corps de la page

// <aside>
	public function ArticlesConnexes();	// affiche le code. Cette méthode est optionnelle.

// <footer>
	public function PiedDePage();		//

// Présentation de méthodes d'entrée (setter) dans l'ordre d'apparition dans le code de doctype.html.
// <head>

// <header>

// <nav>

// <section>

// <aside>
	public function PagesConnexes();	// génère le code pour les pages connexes

// <footer>

}

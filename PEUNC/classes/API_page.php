<?php		// APIs de PEUNC
namespace PEUNC\classes;

interface iPage	{
// une page html est découpée en plusieurs sections. Les méthodes de la classe page sont présentées dans l'ordre d'apparition dans le fichier doctype.html.
// D'abord sont listés les getters qui créent le code qui sera inséré dans la page doctype.html.
// La plupart du code sera tiré de la BDD par hydratation des objets de type page. C'est pour cette raison qu'il n'y a pas beaucoup de setters.
// Quelques setters qui permettent de rajouter du code html. 

// <head>
	public function CSS();				// affiche le code pour utiliser toutes les feuilles CSS associée à la pagE
	//public function headTitre();		// affiche
	// setter
	public function CodeCSS($nom);	// génère le code pour une CSS secondaire. Le nom est sans extension ni chemin. Utiliser avec la méthode CSS()

// <header>
	public function headerLogo();		// logo 
	public function headerTitre();		// titre de la page

// <nav>
	public function Menu();				// génère le menu sur 2 niveaux avec les pages de niveau 2 et 3. Cette méthode est optionnelle.

// <section>
	public function Section();			// affiche le code du corps de la page
	
// <aside>
	public function ArticlesConnexes();	// affiche le code. Cette méthode est optionnelle.
	//setter
	public function PagesConnexes();	// génère le code pour les pages connexes
	
// <footer>
	public function PiedDePage();		// 

}
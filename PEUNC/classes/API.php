<?php
// APIs de PEUNC
namespace PEUNC\classes;

interface Page	{
// une page html est découpée en plusieurs sections. Les méthodes de la classe page sont présentées dans l'ordre d'apparition dans le fichier doctype.html.
// Dans la plupart des cas deux méthodes seront données. Une qui génère le code (setter avec éventuellement des paramètres).
// Et une autre qui ne fait qu'afficher (getter sans paramètre). Tout le code doit être créer avant l'affichage de la page.
// voir le code de chaque méthode pour plus de précisions.

// <head>
	public function CSS();				// affiche le code pour utiliser toutes les feuilles CSS associée à la page
	protected function CodeCSS($nom);	// génère le code pour une CSS. Le nom est sans extension ni chemin. Utiliser avec la méthode précédente
	public function headTitre();		// titre affiché dans le titre de fenêtre ou l'onglet du navigateur
	public function SetTitre($code);	// défini le titre
	
// <header>
	public function hearderLogo();		// affiche le chemin vers l'image pour afficher le logo sur l'en-tête de la page
	public function headerTitre();		// affiche le titre
	public function Onglets();			// génère la liste des onglets à partir des pages de niveau 1. Cette méthode est optionnelle.
	public function SetTitrePage($code);// défini le titre
	public function SetLogo();			// défini le chemin vers l'image du logo sous la forme mon/répertoire/image/fichier.extension. Une vérification de l'existence de  l'image est faite en interne

// <nav>
	public function Menu();				// génère le menu sur 2 niveaux avec les pages de niveau 2 et 3. Cette méthode est optionnelle.

// <section>
	public function Section();			// affiche le code du corps de la page
	
// <aside>
	public function ArticlesConnexes();	// affiche le code. Cette méthode est optionelle.
	public function PagesConnexes();	// génère le code. Cette méthode est optionelle.
	
// <footer>
	public function PiedDePage();		// 

}
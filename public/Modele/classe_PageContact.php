<?php
class PageContact extends Page {

	public function __construct() {
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"formulaire"]);
		$this->setView("contact.html");
		if (empty($_POST))	{ // préparation affichage du formulaire

		} else {	// traitement du formulaire

		}
	}

	public function Afficher_validation()	{
		for($i=0;$i<5;$i++)	echo "\n\t\t\t<li>critère</li>";
		echo "\n";
	}

}

<?php
class PageErreur extends Page	{
	public function __construct() {
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"erreur"]);
		$this->setView("erreur.html");
	}

	public function TexteErreur() {
		return $this->BD->TexteErreur($_SESSION['beta']);
	}
}

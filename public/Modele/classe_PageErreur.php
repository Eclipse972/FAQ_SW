<?php
require 'PEUNC/classes/Erreur.php';

class PageErreur extends Page	{
	protected $OErreur;

	public function __construct() {
		parent::__construct();
		$this->OErreur = new \PEUNC\classes\Erreur;	// héritage multiple impossible en PHP
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"erreur"]);
		$this->setView("erreur.html");
	}

	public function __call($methode,$argument)	{		// permet l'accès aux méthodeS de La classe Erreur de PEUNC
		return $this->OErreur->$methode($argument[0]);	// il n'y a au plus qu'un seul paramètre
	}
}

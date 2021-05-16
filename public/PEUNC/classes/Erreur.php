<?php
// classe page d'ereur de PEUNC
namespace PEUNC\classes;

class Erreur extends Page {
	protected $code;
	protected $tire;
	protected $corps;

	public function __construct() {
		parent::__construct();
		$this->corps = "<p>Noeud: {$_SESSION['alpha']} - {$_SESSION['beta']} - {$_SESSION['gamma']}</p>\n";
	}
	// setters
	public function setCodeErreur($code) {
		$this->code = $code;
	}

	public function setTitreErreur($titre) {
		$this->titre = $titre;
	}

	public function setCorpsErreur($code)	{
		$this->corps = $code;
	}
	// getters
	public function getCodeErreur() {
		return $this->code;
	}

	public function getTitreErreur() {
		return "<h1>{$this->titre}</h1>";
	}

	public function getCorpsErreur() {
		return $this->corps;
	}
}

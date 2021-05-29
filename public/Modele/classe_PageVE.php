<?php
require"Modele/classe_PageArticle.php";

class PageVE extends PageArticle	{
	private $dossier;
	private $titre;
	private $icone_principale;
	private $parRévolution;

	public function __construct(array $TparamURL)	{
		parent::__construct($TparamURL);
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"article",	"creationVE", "winkPlayer"]);
		$this->setView("pageVE.html");
	}

	public function SetDossier($dossier) { $this->dossier = "Piece/" . $dossier . "/"; }
	public function getDossier()	{ return $this->dossier; }

	public function SetTitre($titre) { $this->titre = $titre; }
	public function getTitre()	{ return"Cr&eacute;er " . $this->titre; }

	public function setIconePrincipale($icone_principale) { $this->icone_principale = $icone_principale; }
	public function getIconePrincipale() {
		return $this->icone_principale;
	}

	public function setObtenuParRévolution($flag) { $this->parRévolution = $flag; }
	public function getObtenuParRévolution() { return $this->parRévolution; }
}

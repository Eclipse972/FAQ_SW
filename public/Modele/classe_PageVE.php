<?php
require"Modele/classe_PageArticle.php";

class PageVE extends PageArticle	{
	private $dossier;
	private $titre;
	private $icone_principale;
	private $parRévolution;

	public function __construct()	{
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"article",	"creationVE"]);
		$this->setView("pageVE.html");
	}

	public function SetDossier($dossier) { $this->dossier = "Piece/" . $dossier . "/"; }
	public function getDossier()	{ return $this->dossier; }

	public function SetTitre($titre) { $this->titre = $titre; }
	public function getTitre()	{ return"Cr&eacute;er " . $this->titre; }

	public function setIconePrincipale($icone_principale) { $this->icone_principale = $icone_principale; }
	public function getIconePrincipale() {
		echo $this->icone_principale,
			\PEUNC\classes\Page::BaliseImage(	$this->dossier . "icone.png",
												"ic&ocirc;ne " . $this->icone_principale,
												'style="height:30px; vertical-align:middle"');
		echo ($this->dossier == "Piece/sphere/") ? " et d&eacute;couper" . \PEUNC\classes\Page::BaliseImage("Piece/sphere/icone2.png","ic&ocirc;ne d&eacute;couper",'style="height:30px; vertical-align:middle"') : '';
	}

	public function setObtenuParRévolution($flag) { $this->parRévolution = $flag; }
	public function getObtenuParRévolution() { return $this->parRévolution; }

	public function ParamètresVolume() {
		echo \PEUNC\classes\Page::BaliseImage(($this->parRévolution  ? 'param_revolution.png' : 'param_extrusion.png' ),"param&egrave;tres");
	}

	public function RemplissageParamètres() {
		echo $this->parRévolution ? 'Si la case <b>Axe de r&eacute;volution</b> n&apos;est renseign&eacute;e (ici ligne5) il faut sélectionner l&apos;axe de r&eacute;volution' : 'Dans la partie <b>Direction 1</b>, inscrivez la profondeur ici 70 mm';
	}
}

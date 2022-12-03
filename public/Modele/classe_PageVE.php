<?php
class PageVE extends PageArticle	{
	private $titre;
	private $icone_principale;
	private $parRévolution;
	private $URLesquisse = "";
	private $URLfonction = "";
	

	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		$this->setCSS("creationVE");
		$this->setView("pageVE.html");
	}

/**********
 * SETTER *
 **********/
	public function setDossier($dossier) { $this->dossier = "Piece/" . $dossier . "/"; }

	public function setTitre($titre) { $this->titre = $titre; }

	public function setIconePrincipale($icone_principale) { $this->icone_principale = $icone_principale; }

	public function setObtenuParRévolution($flag) { $this->parRévolution = $flag; }

	public function setAnimationEsquisse($URL)	{ $this->URLesquisse = $URL; }

	public function setAnimationFonction($URL)	{ $this->URLfonction = $URL; }

/**********
 * GETTER *
 **********/
	public function getTitre()				{ return"Cr&eacute;er " . $this->titre; }

	public function getIconePrincipale()	{ return $this->icone_principale; }

	public function getObtenuParRévolution(){ return $this->parRévolution; }

	public function getAnimationEsquisse()	{ return "/Animations/" . $this->URLesquisse; }

	public function getAnimationFonction()	{ return "/Animations/" . $this->URLfonction; }
}

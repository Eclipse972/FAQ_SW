<?php
class PageVE extends PageArticle	{
	private $titre;
	private $icone_principale;
	private $parRévolution;

	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		$this->setCSS("article");
		$this->setCSS("creationVE");
		$this->setView("pageVE.html");
	}

/**************
 * SETTER
 **************/
	public function setDossier($dossier) { $this->dossier = "Piece/" . $dossier . "/"; }

	public function setTitre($titre) { $this->titre = $titre; }

	public function setIconePrincipale($icone_principale) { $this->icone_principale = $icone_principale; }

	public function setObtenuParRévolution($flag) { $this->parRévolution = $flag; }


/**************
 * GETTER
 **************/
	public function getTitre()				{ return"Cr&eacute;er " . $this->titre; }

	public function getIconePrincipale()	{ return $this->icone_principale; }

	public function getObtenuParRévolution(){ return $this->parRévolution; }
}

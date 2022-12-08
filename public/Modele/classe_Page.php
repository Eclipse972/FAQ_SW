<?php
class Page extends PEUNC\Page
{

	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		// valeurs par défaut
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setLogo("logo.png");
		$this->setCSS("https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline");
		$this->setCSS("commun");
		$this->setFooter("");
	}

 	public function AfficherOnglets()	{ echo PEUNC\Page::CodeOnglets($this->route); }

	public function AfficherMenu()		{ echo PEUNC\Page::CodeMenu($this->route); }
}

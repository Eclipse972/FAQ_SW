<?php
class PageAnimation extends PageArticle
{
	private $nomAnimation;
	
	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		$this->setCSS("animation");
		$this->setView("pageAnimation.html");
	}

	// setters
	public function setTitreAnimation($titre)	{ $this->nomAnimation = $titre; }
	
	// getters
	public function getTitreAnimation()	{ return "<h1>" . $this->nomAnimation . "</h1>"; }
}

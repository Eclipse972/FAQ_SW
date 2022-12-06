<?php
class PageAnimation extends PageArticle
{
	private $scriptJS;
	private $videoMP4;
	
	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		$this->setCSS("animation");
		$this->setCSS("winkPlayer");
		$this->setView("pageAnimation.html");
	}

	// setters
	public function setTitreAnimation($titre)	{ $this->nomAnimation = $titre; }

	public function setScriptJS($script)		{ $this->scriptJS = $this->videoMP4 = $script; }

	public function setVideoMP4($video)			{ $this->videoMP4 = $video; }
	
	// getters
	public function getTitreAnimation()	{ return "<h1>" . $this->nomAnimation . "</h1>"; }

	public function getScriptJS()	{ return $this->scriptJS; }

	public function getVideoMP4()	{ return $this->videoMP4; }

	// Autre
	public function Probleme()	{ return !file_exists("js/{$this->scriptJS}.js") || !file_exists("videos/{$this->videoMP4}.mp4"); }

}

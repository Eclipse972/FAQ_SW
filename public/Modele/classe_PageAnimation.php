<?php
class PageAnimation extends PageArticle
{
	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		$this->setCSS("animation");
		$this->setView("pageAnimation.html");
	}

}

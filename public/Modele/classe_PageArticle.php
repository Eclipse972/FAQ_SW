<?php
class PageArticle extends Page
{
	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		// configuration par défaut
		$this->setCSS("article");
		$this->setFooter(" - <a href=\"/Contact\">Me contacter</a>");
		$this->setView("doctype.html");
	}

	public function PagesConnexes()	// construit la liste des liens en relation avec la page. A redéfinir dans vos classes filles
	{
		$Tableau = PEUNC\BDD::SELECT("URL FROM Vue_pagesConnexes WHERE alpha= ? AND beta= ? AND gamma= ?",
								[$this->route->getAlpha(), $this->route->getBeta(), $this->route->getGamma()]);
		switch(count($Tableau))
		{
			case 0: break;
			case 1:	echo "<h1>Page connexe</h1>\n<p>{$Tableau}</p>\n";break;
			default:
				echo "<h1>Pages connexes</h1>\n<ul>\n";
				foreach($Tableau as $ligne)	echo "\t<li>{$ligne['URL']}</li>\n";
				echo "</ul>\n";
		}
	}

}

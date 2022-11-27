<?php
class Page extends PEUNC\Page {

	public function __construct(PEUNC\HttpRoute $route = null, array $TparamURL = []) {
		parent::__construct($route, $TparamURL);
		// valeurs par défaut
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setLogo("logo.png");
		$this->setCSS("https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline");
		$this->setCSS("commun");
		$this->setFooter("");
	}

 	public function AfficherOnglets()	{
		$T_Onglets = PEUNC\BDD::Liste_niveau();
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)	{
			if (($alpha >= 0) && ($alpha <= 4))
				echo "\t<li>" . (($alpha == $this->route->getAlpha()) ? str_replace('href', 'id="alpha_actif" href', $code) : $code) . "</li>\n";
		}
		echo "\t</ul>\n";
	}

	public function AfficherMenu()
	{
		$T_item = PEUNC\BDD::Liste_niveau($this->route->getAlpha());
		echo "\t<ul>\n";
		foreach($T_item as $beta => $code) {
			echo "\t<li>", (($beta == $this->route->getBeta()) ? str_replace('href', 'id="beta_actif" href', $code) : $code), "</li>\n";
			if ($beta == $this->route->getBeta()) {	// sous-menu?
				$T_sous_item = PEUNC\BDD::Liste_niveau($this->route->getAlpha(), $this->route->getBeta());
				if (isset($T_sous_item)) {	// génération sous-menu s'il existe
					echo "\t<ul>\n";
					foreach($T_sous_item as $gamma => $sous_code)
						echo "\t\t<li>", ($gamma == $this->route->getGamma()) ? str_replace('href', 'id="gamma_actif" href', $sous_code) : $sous_code, "</li>\n";
					echo "\t</ul>\n";
				}
			}
		}
		echo "\t</ul>\n";
	}

}

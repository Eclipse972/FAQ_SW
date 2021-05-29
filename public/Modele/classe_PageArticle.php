<?php
class PageArticle extends Page {
	public function __construct(array $TparamURL)	{
		parent::__construct($TparamURL);
		// configuration par défaut
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"article"]);
		$this->setFooter(" - <a href=\"/Contact\">Me contacter</a>");
		$this->setView("doctype.html");
	}

	public function AfficherMenu()	{
		$T_item = $this->BD->Liste_niveau($_SESSION['alpha']);
		echo "\t<ul>\n";
		foreach($T_item as $beta => $code) {
			echo "\t<li>", (($beta == $_SESSION['beta']) ? str_replace('href', 'id="beta_actif" href', $code) : $code), "</li>\n";
			if ($beta == $_SESSION['beta']) {	// sous-menu?
				$T_sous_item = $this->BD->Liste_niveau($_SESSION['alpha'], $_SESSION['beta']);
				if (isset($T_sous_item)) {	// génération sous-menu s'il existe
					echo "\t<ul>\n";
					foreach($T_sous_item as $gamma => $sous_code)
						echo "\t\t<li>", ($gamma == $_SESSION['gamma']) ? str_replace('href', 'id="gamma_actif" href', $sous_code) : $sous_code, "</li>\n";
					echo "\t</ul>\n";
				}
			}
		}
		echo "\t</ul>\n";
	}

	public function PagesConnexes() {	// construit la liste des liens en relation avec la page. A redéfinir dans vos classes filles
		$Tableau = $this->BD->PagesConnexes($_SESSION['alpha'], $_SESSION['beta'],$_SESSION['gamma']);
		switch(count($Tableau)) {
			case 0: break;
			case 1:	echo "<h1>Page connexe</h1>\n<p>{$Tableau[0]['URL']}</p>\n";break;
			default:
				echo "<h1>Pages connexes</h1>\n<ul>\n";
				foreach($Tableau as $ligne)	echo "\t<li>{$ligne['URL']}</li>\n";
				echo "</ul>\n";
		}
	}

}

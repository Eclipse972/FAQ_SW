<?php
class Page {
	protected $logo;
	protected $BD;
	protected $conteneurPage;

	public function __construct(array $TparamURL = []) {
		$this->conteneurPage = new PEUNC\classes\Page($TparamURL);
		$this->BD = new PEUNC\classes\BDD;
		// valeurs par défaut
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setLogo("logo.png");
		$this->setFooter("");
	}

	public function __call($methode,$argument)	{		// permet l'accès aux méthodes du conteneur Page de PEUNC
		return $this->conteneurPage->$methode($argument[0]);	// il n'y a au plus qu'un seul paramètre
	}

// Méthodes pour la nouvelle variable-membre logo
	public function setLogo($logo) {	// nom de la forme /sous/dossier/fichier.extension à partir du dossier image du site
		$this->logo = $logo;
	}
	public function getLogo() {
		echo \PEUNC\classes\Page::BaliseImage($this->logo,'Logo');
	}

 /* ***************************
 * AFFICHAGE
 * ***************************/
 	public static function AfficherOnglets($imageAvantTexte = true)	{
		$BD	= new \PEUNC\classes\BDD;
		$T_Onglets = $BD->Liste_niveau();
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)	{
			if ($alpha < 5)
				echo "\t<li>", (($alpha == $_SESSION['alpha']) ? str_replace('href', 'id="alpha_actif" href', $code) : $code), "</li>\n";
		}
		echo "\t</ul>\n";
	}
}

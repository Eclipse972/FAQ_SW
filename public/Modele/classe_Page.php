<?php
class Page extends PEUNC\classes\Page {
	protected $logo;

	public function __construct() {
		parent::__construct();
		// valeurs par défaut
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setLogo("logo.png");
		$this->setFooter("");
	}
// Méthodes pour la nouvelle variable-membre logo
	public function setLogo($logo) {	// nom de la forme /sous/dossier/fichier.extension à partir du dossier image du site
		$this->logo = $logo;
	}
	public function getLogo() {
		echo $this->BaliseImage($this->logo,'Logo');
	}

 /* ***************************
 * AFFICHAGE
 * ***************************/
 	public static function AfficherOnglets($imageAvantTexte = true)	{
		$BD	= new \PEUNC\classes\BDD;
		$T_Onglets = $BD->Liste_niveau();
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)	{
			echo "\t<li>", (($alpha == $_SESSION['alpha']) ? str_replace('href', 'id="alpha_actif" href', $code) : $code), "</li>\n";
		}
		echo "\t</ul>\n";
	}
}

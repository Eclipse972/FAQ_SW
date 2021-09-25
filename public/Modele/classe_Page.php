<?php
class Page {
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
		return $this->conteneurPage->$methode($argument[0], $argument[1], $argument[2]);
		// il y a au plus trois paramètres. Solution "sale" mais qui fonctionne
	}

 /* ***************************
 * AUTRE
 * ***************************/
 	public function AfficherOnglets($imageAvantTexte = true)	{
		$T_Onglets = $this->BD->Liste_niveau();
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)	{
			if ($alpha < 5)
				echo "\t<li>", (($alpha == $_SESSION['alpha']) ? str_replace('href', 'id="alpha_actif" href', $code) : $code), "</li>\n";
		}
		echo "\t</ul>\n";
	}

	public function ExecuteControleur($alpha, $beta, $gamma)	{
		$script = $this->conteneurPage->CheminControleur($alpha, $beta, $gamma);
		$dossierControleur = PEUNC\classes\Page::DOSSIER_CONTROLEUR;
		if($script == '')
			throw new Exception("Controleur non d&eacute;fini");
		else {
			if (file_exists($dossierControleur. $script))
				require($dossierControleur . $script);
			else throw new Exception("Controleur inexistant");
		}
	}
}

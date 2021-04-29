<?php
// classes pages de PEUNC
namespace PEUNC\classes;

include"API_page.php";

class Page implements iPage	{
	// dossiers pas défaut
	const DOSSIER_MODEL		= 'Modele/';
	const DOSSIER_VUE		= 'Vue/';
	const DOSSIER_CONTROLEUR= 'Controleur/';
	const DOSSIER_IMAGE		= 'images/';
	const DOSSIER_CSS		= 'CSS/';

	protected $BD;
	protected $titrePage;
	protected $T_CSS;
	protected $logo;
	protected $entetePage;
	protected $scriptSection;

	public function __construct()	{
		$this->BD			= new BDD;
		$this->titrePage	= "Titre de la page affiché dans la barre du haut du navigateur";
		$this->T_CSS		= [];
		$this->logo			= 'logo.png';
		$this->entetePage	= "En-tête de la page affichée";
		$this->scriptSection= "<h1>Page vide</h1>\n<p>Contenu en construction...</p>\n";
	}

	public function Hydrate()	{
		$script = $this->BD->Controleur();
		if($script != '')	{
			if (file_exists(self::DOSSIER_CONTROLEUR . $script))
				require(self::DOSSIER_CONTROLEUR . $script);
			else die("Controleur inexistant");
		}
	}
	/* ***************************
	 * MUTATEURS (SETTER)
	 * ***************************/

	/* ***************************
	 * ASSESSURS (GETTER)
	 * ***************************/
	public function TitrePage()	{
		echo $this->titrePage;
	}

	public function CSS()	{
		foreach($this->T_CSS as $feuilleCSS)	{
			if(substr($feuilleCSS,0,4) != 'http')	$feuilleCSS = "/" . self::DOSSIER_CSS . $feuilleCSS . ".css";
			// à faire: test de l'existence de la feuille sur le site
			echo"\t<link rel=\"stylesheet\" href=\"", $feuilleCSS,"\" />\n";
		}
	}

	public function LogoPage() {
		echo (file_exists(self::DOSSIER_IMAGE . $this->logo)) ? self::DOSSIER_IMAGE . $this->logo : 'PEUNC/Vue/logo_manquant.png';
	}

	public function EntetePage() {
		echo $this->entetePage,"\n";
	}

	public function Section()	{
		echo $this->scriptSection;
	}

	public function PiedDePage()	{
		echo" - <a href=\"/Contact\">Me contacter</a>";
	}

	/* ***************************
	 * AUTRES MÉTHODES
	 * ***************************/

	public function Onglets()	{
		$T_Onglets = $this->BD->Liste_niveau(1);
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)
			echo "\t\t<li>", (($alpha == $_SESSION['alpha']) ? str_replace('href', 'id="onglet_actif" href', $code) : $code), "</li>\n";
		echo "\t</ul>\n";
	}

	public function Menu()	{
		$T_item = $this->BD->Liste_niveau(2);
		echo "<nav>\n<ul>\n";
		foreach($T_item as $beta => $code) {
			echo "\t<li>", (($beta == $_SESSION['beta']) ? str_replace('href', 'id="item_actif" href', $code) : $code), "</li>\n";
			if ($beta == $_SESSION['beta']) {	// sous-menu?
				$T_sous_item = $this->BD->Liste_niveau(3);
				if (isset($T_sous_item)) {	// génération sous-menu s'il existe
					echo "\t<ul>\n";
					foreach($T_sous_item as $gamma => $sous_code)
						echo "\t\t<li>", ($gamma == $_SESSION['gamma']) ? str_replace('href', 'id="sous_item_actif" href', $sous_code) : $sous_code, "</li>\n";
					echo "\t</ul>\n";
				}
			}
		}
		echo "</ul>\n</nav>\n";
	}

	public function ArticlesConnexes()	{
		echo "<aside>\n";
		$this->PagesConnexes();
		echo "</aside>\n";
	}

	public function PagesConnexes() {	// construit la liste des liens en relation avec la page. A redéfinir dans vos classes filles
		$Tableau = $this->BD->PagesConnexes();
		switch(count($Tableau)) {
			case 0: break;
			case 1:
				echo "<h1>Page connexe</h1>\n<p>{$Tableau[0]['URL']}</p>\n";
				break;
			default:
				echo "<h1>Pages connexes</h1>\n<ul>\n";
				foreach($Tableau as $ligne)	echo "\t<li>{$ligne['URL']}</li>\n";
				echo "</ul>\n";
		}
	}

}

// Classes filles
class PageErreur extends Page {

	public function Menu()	{ echo"<nav></nav>\n"; } // génère une colonne vide

	public function Section()	{ echo"<h1>Erreur {$_SESSION['beta']}: {$this->BD->TexteErreur()}</h1>\n";	}

	public function PagesConnexes()	{}
}

class PageContact extends Page {
	protected $titreFormulaire;

	public function __construct() {
		parent::__construct();
		if (empty($_POST))	{ // préparation affichage du formulaire

		} else {	// traitement du formulaire

		}
	}

	public function Menu()	{ echo"<nav></nav>\n"; } // génère une colonne vide

	public function PagesConnexes()	{}

	public function Section()	{
?><h1><?=$this->titreFormulaire?></h1>
	<form method="post" action="#" id=formulaire>
		<p>Nom		<input type="text"	name="nom"		/></p>
		<p>Courriel	<input type="email" name="courriel" /></p>
		<p>Objet	<input type="text"	name="objet"	/></p>
		<p>Message	<textarea name="message" rows="6"></textarea></p>
		<div id=validation>
			<p>Validation du formulaire</p>
			<ol><?=$this->Afficher_validation()?>
			</ol>
			<p>Code	<input type="text" name="code" style="width:100px;" /></p>
		</div>
		<p style="text-align:center;">
			<input type="submit" value="Envoyer" style="width:100px; margin-right:200px" />
		</p>
	</form>
<?php
	}

	public function Afficher_validation()	{
		for($i=0;$i<5;$i++)	echo "\n\t\t\t<li>critère</li>";
		echo "\n";
	}

	public function PiedDePage()	{}	// normal pour le formulaire de contact!
}

class PageAdministrateur extends Page {
	public function Onglets() {}	// pas d'onglet pour ce type de page

	public function PiedDePage()	{}
}

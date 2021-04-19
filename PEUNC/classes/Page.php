<?php
// classes pages de PEUNC
namespace PEUNC\classes;

include"API_page.php";

class Page implements iPage	{
	protected $BD;
	protected $titrePage;
	protected $CSS;
	protected $logo;
	protected $entetePage;
	protected $scriptSection;

	public function __construct()	{
		$this->BD = new BDD;

		// hydratation de la page
		list($this->CSS, $this->titrePage, $this->logo, $this->entetePage, $this->scriptSection) = $this->BD->HydratePage();

		if(!file_exists($this->logo))	$this->logo = 'PEUNC/Vue/logo_manquant.png';
		if(!file_exists('Vue/'.$this->CSS.'.css'))	die("Vue/{$this->CSS}.css n&apos;existe pas !");
		if ($this->scriptSection != '')	{			// champ non vide?
			if (!file_exists($this->scriptSection))	// script n'existe pas?
				header("location:/Erreur>Article_inexistant");
		}
	}

	public function TitrePage()	{ echo $this->titrePage; }

	public function CSS()	{ $this->CodeCSS($this->CSS); }

	public function CodeCSS($nom)	{	// permet de créer une ligne de code pour insérer une feuille de style.
		// Cette fonction servira si vous voulez redéfinr la méthode CSS()
		// exemple: public function CSS() {  $this->CodeCSS("fichier1"); $this->CodeCSS("fichier1"); }
		echo"<link rel=\"stylesheet\" href=\"Vue/{$nom}.css\" />\n";
	}

	public function LogoPage() { echo $this->logo; }

	public function EntetePage() { echo $this->entetePage,"\n"; }

	public function Onglets()	{
		$T_Onglets = $this->BD->Liste_niveau(1);
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)
			echo "\t\t<li>", (($alpha == $_SESSION['alpha']) ? str_replace('href', 'id="onglet_actif" href', $code) : $code), "</li>\n";
		echo "\t</ul>\n";
	}

	public function Section()	{
		include $this->scriptSection;
		//echo "\n";
	}

	public function Menu()	{
		$T_item = $this->BD->Liste_niveau(2);
		echo "<nav>\n\t<ul>\n";
		foreach($T_item as $beta => $code) {
			echo "\t\t<li>", (($beta == $_SESSION['beta']) ? str_replace('href', 'id="item_actif" href', $code) : $code), "</li>\n";
			if ($beta == $_SESSION['beta']) {	// sous-menu?
				$T_sous_item = $this->BD->Liste_niveau(3);
				if (isset($T_sous_item)) {	// génération sous-menu s'il existe
					echo "\t\t<ul>\n";
					foreach($T_sous_item as $gamma => $sous_code)
						echo "\t\t\t<li>", ($gamma == $_SESSION['gamma']) ? str_replace('href', 'id="sous_item_actif" href', $sous_code) : $sous_code, "</li>\n";
					echo "\t\t</ul>\n";
				}
			}
		}
		echo "\t</ul>\n</nav>\n";
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

	public function PiedDePage()	{	echo" - <a href=\"/Contact\">Me contacter</a>";	}
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

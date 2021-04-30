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
	protected $PiedDePage;

	public function __construct()	{
		$this->BD			= new BDD;
		$this->titrePage	= "Titre de la page affiché dans la barre du haut du navigateur";
		$this->T_CSS		= [];
		$this->logo			= "nom du fichier dans le dossier image";
		$this->entetePage	= "En-tête de la page affichée";
		$this->scriptSection= "<h1>Page vide</h1>\n<p>Contenu en construction...</p>\n";
		$this->PiedDePage	= "<p>Pied de page &agrave; d&eacute;finir";
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
	public function setCSS($Tableau)	{
		foreach($Tableau as $feuilleCSS)	{
			if(substr($feuilleCSS,0,4) == 'http')
				$this->T_CSS[] = $feuilleCSS;	// pas de vérification
			else {
				$feuilleCSS = self::DOSSIER_CSS . $feuilleCSS . ".css";
				if(file_exists($feuilleCSS))
					$this->T_CSS[] = '/' . $feuilleCSS;
				else { /* À faire: traitement en cas d'inexistence' */ }
			}
		}
	}

	public function setTitle($titre)	{
		$this->titrePage = $titre;
	}

	public function setHeaderText($texte)	{
			$this->entetePage = $texte;
	}

	public function setLogo($logo) {	// nom de la forme /sous/dossier/fichier.extension à partir du dossier image du site
		$this->logo = file_exists(self::DOSSIER_IMAGE . $logo) ? self::DOSSIER_IMAGE . $logo : "PEUNC/Vue/logo_manquant.png";
	}

	public function setSection($code)	{
		$this->scriptSection = $code;
	}

	public function setFooter($code)	{
		$this->PiedDePage = $code;
	}

/* ***************************
 * ASSESSURS (GETTER)
 * ***************************/
	public function getTitle()	{
		echo $this->titrePage;
	}

	public function getCSS()	{
		foreach($this->T_CSS as $feuilleCSS)
			echo"\t<link rel=\"stylesheet\" href=\"", $feuilleCSS,"\" />\n";
	}

	public function getLogo() {
		echo $this->logo;
	}

	public function getHeaderText() {
		echo $this->entetePage,"\n";
	}

	public function getSection()	{
		echo $this->scriptSection;
	}

	public function getFooter()	{
		echo $this->PiedDePage;
	}

/* ***************************
 * AFFICHAGE
 * ***************************/
	public function AfficherOnglets()	{
		$T_Onglets = $this->BD->Liste_niveau(1);
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)
			echo "\t\t<li>", (($alpha == $_SESSION['alpha']) ? str_replace('href', 'id="alpha_actif" href', $code) : $code), "</li>\n";
		echo "\t</ul>\n";
	}

	public function AfficherMenu()	{
		$T_item = $this->BD->Liste_niveau(2);
		echo "<nav>\n<ul>\n";
		foreach($T_item as $beta => $code) {
			echo "\t<li>", (($beta == $_SESSION['beta']) ? str_replace('href', 'id="beta_actif" href', $code) : $code), "</li>\n";
			if ($beta == $_SESSION['beta']) {	// sous-menu?
				$T_sous_item = $this->BD->Liste_niveau(3);
				if (isset($T_sous_item)) {	// génération sous-menu s'il existe
					echo "\t<ul>\n";
					foreach($T_sous_item as $gamma => $sous_code)
						echo "\t\t<li>", ($gamma == $_SESSION['gamma']) ? str_replace('href', 'id="gamma_actif" href', $sous_code) : $sous_code, "</li>\n";
					echo "\t</ul>\n";
				}
			}
		}
		echo "</ul>\n</nav>\n";
	}

	public function AfficherURLConnexes()	{
		echo "<aside>\n";
		$this->PagesConnexes();
		echo "</aside>\n";
	}

/* ***************************
 * AUTRES MÉTHODES
 * ***************************/

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

	public function AfficherMenu()	{
		echo"<nav></nav>\n";// génère une colonne vide
	}

	public function getSection()	{
		echo"<h1>Erreur {$_SESSION['beta']}: {$this->BD->TexteErreur()}</h1>\n";
	}

	public function PagesConnexes()	{}
}

class PageContact extends Page {

	public function __construct() {
		parent::__construct();
		if (empty($_POST))	{ // préparation affichage du formulaire

		} else {	// traitement du formulaire

		}
	}

	public function setFormTitle($titre) {
		$this->titreFormulaire = $titre;
	}

	public function AfficherMenu()	{
		echo"<nav></nav>\n";	// génère une colonne vide
	}

	public function PagesConnexes()	{}

	public function getSection()	{
?><h1>Formulaire de contact</h1>
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
}

class PageAdministrateur extends Page {
	public function AfficherOnglets() {}	// pas d'onglet pour ce type de page
}

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
 	public function AfficherOnglets($imageAvantTexte = true)	{
		$T_Onglets = $this->BD->Liste_niveau();
		echo "<ul>\n";
		foreach($T_Onglets as $alpha => $code)	{
			echo "\t<li>", (($alpha == $_SESSION['alpha']) ? str_replace('href', 'id="alpha_actif" href', $code) : $code), "</li>\n";
		}
		echo "\t</ul>\n";
	}

 /* ***************************
 * AUTRES MÉTHODES
 * ***************************/

}

 /* ***************************
 * CLASSES FILLES
 * ne oublier le contructeur
 * ***************************/

class PageArticle extends Page {
	public function __construct()	{
		parent::__construct();
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

class PageVE extends PageArticle	{
	private $dossier;
	private $titre;
	private $icone_principale;
	private $parRévolution;

	public function __construct()	{
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"article",	"creationVE"]);
		$this->setView("pageVE.html");
	}

	public function SetDossier($dossier) { $this->dossier = "Piece/" . $dossier . "/"; }
	public function getDossier()	{ echo $this->dossier; }

	public function SetTitre($titre) { $this->titre = $titre; }
	public function getTitre()	{ echo"Cr&eacute;er ",$this->titre; }

	public function VEcoté() {
		return \PEUNC\classes\Page::BaliseImage($this->dossier . "VEcote.png",
												$this->titre . " avec ses cotes",
												'style="vertical-align:middle; height:300px"');
	}

	public function TitrePageVE()	{
		switch($this->getParamURL())	{
			case 1: $titre = 'Esquisse cot&eacute;e';	break;
			case 2: $titre = 'Fonction de mise en volume';	break;
			default:$titre = 'Choisir le plan d&apos;esquisse';
		}
		return $titre;
	}

	public function ContenuPageVE()	{
		ob_start();
		switch($this->getParamURL())	{
		case 1:
?>			<p>Il faut dessiner :<?=$this->EsquisseCotée()?></p>
			<p>Dans la barre d&apos;outils, cliquez sur l&apos;onglet <b>Esquisse</b> (deuxi&egrave;me onglet) :<?=\PEUNC\classes\Page::BaliseImage("outilsEsquisse.png","Barre )?d&apos;outils Esquisse")?></p>
			<p>Vous aurez besoin des ic&ocirc;nes:</p>
			<ul>
				<li><?=$this->getIconePrincipale()?></li>
				<?=$this->AxeDeRévolution()?>
				<li>cotation intelligente<?=\PEUNC\classes\Page::BaliseImage("Piece/cotation.png", "ic&ocirc;ne cotation intelligente",'style="vertical-align:middle"')?> . pour coter votre esquisse.</li>
			</ul>
			<a href="<?=$_SERVER['REDIRECT_URL']?>">Etape pr&eacute;c&eacute;dente</a> - <a href="<?=$_SERVER['REDIRECT_URL']?>?2">Etape suivante</a>
<?php		break;
		case 2:
?>			<ol>
				<li>Dans la barre d&apos;outils, s&eacute;lectionnez l&apos;onglet <b>Fonctions</b> (premier onglet) :<?=\PEUNC\classes\Page::BaliseImage("fonctions.png","Barre d&apos;outils Fonctions.",'style="vertical-align:middle"')?></li>
				<li>Cliquez sur l&apos;ic&ocirc;ne <?=$this->IconeMiseEnVolume()?></li>
				<p class="gauche"><?=$this->ParamètresVolume()?></p>
				<li style="margin-top:50px">A gauche de l&apos;&eacute;cran apparaissent les param&egrave;tres</li>
				<li><?=$this->RemplissageParamètres() ?></li>
				<?=$this->Dépouille()?>
				<li>Enfin validez en cliquant sur <?=\PEUNC\classes\Page::BaliseImage("validation.png","icocirc:ne d&eacute;pouille",'style="height:30px; vertical-align:middle"')?> en haut à gauche.</li>
			</ol>
			<a href="<?=$_SERVER['REDIRECT_URL']?>?1">Etape pr&eacute;c&eacute;dente</a>
<?php		break;
			default:
?>			<p>choisir un plan d&apos;esquisse (Face, Dessus ou Doite) dans l&apos;arbre de cr&eacute;ation<?=\PEUNC\classes\Page::BaliseImage("arbre.png","Arbre de cr&eacute;ation vide",'style="vertical-align:middle"')?></p>
			<a href="<?=$_SERVER['REDIRECT_URL']?>?1">Etape suivante</a>
<?php		break;
		} // switch
		$contenu = ob_get_contents();
		ob_get_clean();
		return $contenu;
	}

	public function EsquisseCotée() {
		return \PEUNC\classes\Page::BaliseImage($this->dossier . "esquisse.png", "esquisse cot&eacute;e",'style="vertical-align:middle; height:300px"');
	}

	public function setIconePrincipale($icone_principale) { $this->icone_principale = $icone_principale; }
	public function getIconePrincipale() {
		echo $this->icone_principale,
			\PEUNC\classes\Page::BaliseImage(	$this->dossier . "icone.png",
												"ic&ocirc;ne " . $this->icone_principale,
												'style="height:30px; vertical-align:middle"');
		echo ($this->dossier == "Piece/sphere/") ? " et d&eacute;couper" . \PEUNC\classes\Page::BaliseImage("Piece/sphere/icone2.png","ic&ocirc;ne d&eacute;couper",'style="height:30px; vertical-align:middle"') : '';
	}

	public function setObtenuParRévolution($flag) { $this->parRévolution = $flag; }
	public function AxeDeRévolution() {
		echo ($this->parRévolution) ? '<li>ligne de construction' . \PEUNC\classes\Page::BaliseImage("ligne2construction.png","ic&ocirc;ne ligne de construction",'style="height:30px; vertical-align:middle"') . "pour cr&eacute;er l&apos;axe de r&eacute;volution.</li>\n\t" : '';
	}

	public function IconeMiseEnVolume() {
		 echo"<b>", (($this->parRévolution) ? 'Bossage/Base avec r&eacute;volution' : 'Base/Bossage extrud&eacute;'), "</b>";
		 echo \PEUNC\classes\Page::BaliseImage(($this->parRévolution ? 'revolution.png': 'extrusion.png'),
												"ic&ocirc;ne de mise en volume",
												'style="height:30px; vertical-align:middle"');
		 echo ($this->parRévolution ? ' deuxi&egrave;me' : ' premi&egrave;re'), ' ic&ocirc;ne.';
	}
	public function ParamètresVolume() {
		echo \PEUNC\classes\Page::BaliseImage(($this->parRévolution  ? 'param_revolution.png' : 'param_extrusion.png' ),"param&egrave;tres");
	}

	public function RemplissageParamètres() {
		echo $this->parRévolution ? 'Si la case <b>Axe de r&eacute;volution</b> n&apos;est renseign&eacute;e (ici ligne5) il faut sélectionner l&apos;axe de r&eacute;volution' : 'Dans la partie <b>Direction 1</b>, inscrivez la profondeur ici 70 mm';
	}

	public function Dépouille() {
		echo ($this->dossier == "Piece/tronc2cone2/") ? "<li>Cliquez sur l&apos;ic&ocirc;ne d&eacute;pouille " . \PEUNC\classes\Page::BaliseImage("depouille.png","icocirc:ne d&eacute;pouille",'style="height:30px; vertical-align:middle"') . "puis entrez l&apos;angle en degr&eacute;s.</li>" : '';
	}
}

class PageErreur extends Page	{
	public function __construct() {
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"erreur"]);
		$this->setView("erreur.html");
	}

	public function TexteErreur() {
		return $this->BD->TexteErreur($_SESSION['beta']);
	}
}

class PageContact extends Page {

	public function __construct() {
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"formulaire"]);
		$this->setView("contact.html");
		if (empty($_POST))	{ // préparation affichage du formulaire

		} else {	// traitement du formulaire

		}
	}

	public function Afficher_validation()	{
		for($i=0;$i<5;$i++)	echo "\n\t\t\t<li>critère</li>";
		echo "\n";
	}

}

<?php
class Page extends PEUNC\classes\Page {
/* ***************************
 * MUTATEURS (SETTER)
 * ***************************/

 /* ***************************
 * ASSESSURS (GETTER)
 * ***************************/

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

	public function AfficherMenu()	{
		$T_item = $this->BD->Liste_niveau($_SESSION['alpha']);
		echo "<nav>\n<ul>\n";
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
		echo "</ul>\n</nav>\n";
	}


 /* ***************************
 * AUTRES MÉTHODES
 * ***************************/

}

class PageArticle extends Page {
	public function __construct()	{
		parent::__construct();
		// configuration par défaut
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"article"]);
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setFooter(" - <a href=\"/Contact\">Me contacter</a>");
		$this->setLogo("logo.png");
	}

}

class PageVE extends PageArticle	{
	private $dossier;

	public function __construct()	{
		parent::__construct();
		// configuration par défaut
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"article",	"creationVE"]);
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
	}

	public function SetDossier($dossier) { $this->dossier = $dossier; }

	public function TitreVE($titre, $VE) { // VE et dossierVE ne sont pas forcément identiques.Exemple: tronc de cône et tronc2cone
		?>
		<h1>Cr&eacute;er <?=$titre?> </h1>
		<p>On veut r&eacute;aliser : <?=\PEUNC\classes\Page::BaliseImage("Piece/{$this->dossier}/VEcote.png","{$VE} cot&eacute;",'style="vertical-align:middle; height:300px"')?></p>
		<?php
	}

	public function PlanDesquisse() {
		?>
		<div id="Phase">
		<h2>Choisir le plan d&apos;esquisse</h2>
		<p>choisir un plan d&apos;esquisse (Face, Dessus ou Doite) dans l&apos;arbre de cr&eacute;ation<?=\PEUNC\classes\Page::BaliseImage("arbre.png","Arbre de cr&eacute;ation vide",'style="vertical-align:middle"')?></p>
		<p>Vid&eacute;o de d&eacute;monstration &agrave; venir.</p>
		</div>
		<?php // <a href="Vue/planDesquisse.avi">Montre moi</a>
	}

	public function EsquisseCotée($icone_principale, $extrusion = true, $icone_secondaire = '') {
		?>
		<div id="Phase">
		<h2>Esquisse cot&eacute;e</h2>
		<p>Il faut dessiner :<?=\PEUNC\classes\Page::BaliseImage("Piece/{$this->dossier}/esquisse.png","esquisse cot&eacute;e",'style="vertical-align:middle; height:300px"')?></p>
		<p>Dans la barre d&apos;outils, cliquez sur l&apos;onglet <b>Esquisse</b> (deuxi&egrave;me onglet) :<?=\PEUNC\classes\Page::BaliseImage("outilsEsquisse.png","Barre )?d&apos;outils Esquisse")?></p>
		<p>Vous aurez besoin des ic&ocirc;nes:</p>
		<ul>
			<li>
				<?php
				echo $icone_principale,\PEUNC\classes\Page::BaliseImage("Piece/{$this->dossier}/icone.png", "ic&ocirc;ne {$icone_principale}",'style="height:30px; vertical-align:middle"');
				if ($icone_secondaire != '')
					echo " et {$icone_secondaire}", \PEUNC\classes\Page::BaliseImage("Piece/{$this->dossier}/icone2.png","ic&ocirc;ne {$icone_secondaire}",'style="height:30px; vertical-align:middle"');
				?>
			</li>
			<?=$extrusion ? '' : '<li>ligne de construction' . \PEUNC\classes\Page::BaliseImage("ligne2construction.png","ic&ocirc;ne ligne de construction",'style="height:30px; vertical-align:middle"') . "pour cr&eacute;er l&apos;axe de r&eacute;volution.</li>\n\t"?>
			<li>cotation intelligente<?=\PEUNC\classes\Page::BaliseImage("Piece/cotation.png", "ic&ocirc;ne cotation intelligente",'style="vertical-align:middle"')?> . pour coter votre esquisse.</li>
		</ul>
		<p>Vid&eacute;o de d&eacute;monstration &agrave; venir.</p>
		</div>
		<?php /* <a href="images/<?=$this->dossier?>/esquisse.avi">Montre moi</a> */
	}

	public function MiseEnVolume($extrusion = true, $dépouille =false) {
		?>

		<div id="Phase">
		<h2>Fonction de mise en volume</h2>
		<ol>
			<li>Dans la barre d&apos;outils, s&eacute;lectionnez l&apos;alpha <b>Fonctions</b> (premier alpha) :<?=\PEUNC\classes\Page::BaliseImage("fonctions.png","Barre d&apos;outils Fonctions.",'style="vertical-align:middle"')?></li>
			<li>Cliquez sur l&apos;ic&ocirc;ne <b><?=$extrusion ? 'Base/Bossage extrud&eacute;' : 'Base bossage avec r&eacute;volution'?></b>
				<?=\PEUNC\classes\Page::BaliseImage(($extrusion ? 'extrusion.png' : 'revolution.png'),"ic&ocirc;ne de mise en volume",'style="height:30px; vertical-align:middle"')?>
				<?=$extrusion ? ' premi&egrave;re' : ' deuxi&egrave;me'?> ic&ocirc;ne.
			</li>

			<p class="gauche"><?=\PEUNC\classes\Page::BaliseImage(($extrusion ? 'param_extrusion.png' : 'param_revolution.png'),"param&egrave;tres")?></p>

			<li style="margin-top:50px">A gauche de l&apos;&eacute;cran apparaissent les param&egrave;tres</li>
			<li><?=$extrusion ? 'Dans la partie <b>Direction 1</b>, inscrivez la profondeur ici 70 mm' : 'Si la case <b>Axe de r&eacute;volution</b> n&apos;est renseign&eacute;e (ici ligne5) il faut sélectionner l&apos;axe de r&eacute;volution'?>.</li>
			<?php if (($extrusion) && ($dépouille))
				echo "<li>Cliquez sur l&apos;ic&ocirc;ne d&eacute;pouille ", \PEUNC\classes\Page::BaliseImage("depouille.png","icocirc:ne d&eacute;pouille",'style="height:30px; vertical-align:middle"'), "puis entrez l&apos;angle en degr&eacute;s.</li>";
			?>
			<li>Enfin validez en cliquant sur <?=\PEUNC\classes\Page::BaliseImage("validation.png","icocirc:ne d&eacute;pouille",'style="height:30px; vertical-align:middle"')?> en haut à gauche.</li>
		</ol>
		<p>Vid&eacute;o de d&eacute;monstration &agrave; venir.</p>
		</div>
		<?php /* <a href="images/<?=$this->dossier?>/miseEnVolume.avi">Montre moi</a> */
	}
}

class PageErreur extends Page	{
	public function __construct() {
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"erreur"]);
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setLogo("logo.png");
		$this->setFooter("");
	}

	public function PagesConnexes()	{}

	public function getSection()	{
?>
	<h1>Erreur <?=$_SESSION['beta']?>: <?=$this->BD->TexteErreur($_SESSION['beta'])?></h1>
	<p>S&eacute;lectionnez un des onglets en haut de cette page.</p>
	<p>Si le probl&egrave;me persiste envoyez-moi un courriel en <a href="faq.sw@free.fr">cliquant ici</a>.</p>
<?php
	}

	public function AfficherMenu()	{
		echo"<nav></nav>\n";// génère une colonne vide
	}


}

class PageContact extends Page {
	public function __construct() {
		parent::__construct();
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"formulaire"]);
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setLogo("logo.png");
		$this->setFooter("");
	}

	public function AfficherMenu()	{
		echo"<nav></nav>\n";	// génère une colonne vide
	}

}

class PageAdministrateur extends PEUNC\classes\PageAdministrateur {}

<?php
class PageArticle extends PagePEUNC
{
	protected $lienArticle;

	public function __construct() {
		parent::__construct();
		$dossier = $this->BD->DossierArticle();
		if (isset($dossier)) {
			$chemin = "Articles/{$dossier}/page.html";
			if (file_exists($chemin))
				$this->lienArticle = $chemin;
			else header("location:?alpha=-1&beta=1");
		} else header("location:?alpha=-1&beta=404");
	}
	// fonctions obligatoires
	public function CSS()	{ $this->CodeCSS("article"); }

	public function Section() { include $this->lienArticle; }

	public function PagesConnexes() {
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
	// fin des fonctions obligatoire
}

class PageVE extends PageArticle
{
	private $dossier;

	public function CSS()	{
		$this->CodeCSS("article");
		$this->CodeCSS("creationVE");
	}

	public function SetDossier($dossier) { $this->dossier = $dossier; }

	public function TitreVE($titre, $VE) { // VE et dossierVE ne sont pas forcément identiques.Exemple: tronc de cône et tronc2cone
		?>
		<h1>Cr&eacute;er <?=$titre?> </h1>
		<p>On veut r&eacute;aliser : <img src="Articles/<?=$this->dossier?>/VEcote.png" style="vertical-align:middle; height:300px" alt="<?=$VE?> cot&eacute;"></p>
		<?php
	}

	public function PlanDesquisse() {
		?>
		<div id="Phase">
		<h2>Choisir le plan d&apos;esquisse</h2>
		<p>choisir un plan d&apos;esquisse (Face, Dessus ou Doite) dans l&apos;arbre de cr&eacute;ation<img src="Vue/images/arbre.png" style="vertical-align:middle" alt="Arbre de cr&eacute;ation vide"></p>
		<p>Vid&eacute;o de d&eacute;monstration &agrave; venir.</p>
		</div>
		<?php // <a href="Vue/planDesquisse.avi">Montre moi</a>
	}

	public function EsquisseCotée($icone_principale, $extrusion = true, $icone_secondaire = '') {
		?>
		<div id="Phase">
		<h2>Esquisse cot&eacute;e</h2>
		<p>Il faut dessiner :<img src="Articles/<?=$this->dossier?>/esquisse.png" style="vertical-align:middle; height:300px" alt="esquisse cot&eacute;e"></p>
		<p>Dans la barre d&apos;outils, cliquez sur l&apos;alpha <b>Esquisse</b> (deuxi&egrave;me alpha) :<img src="Vue/images/outilsEsquisse.png" alt="Barre d&apos;outils Esquisse"></p>
		<p>Vous aurez besoin des ic&ocirc;nes:</p>
		<ul>
		<li>
		<?php
			echo $icone_principale,'<img src="Articles/',$this->dossier,'/icone.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne ',icone_principale,'">';
			if ($icone_secondaire != '')
				echo ' et ',$icone_secondaire,'<img src="Articles/',$this->dossier,'/icone2.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne ',$icone_secondaire,'">';
		?>
		</li>
		<?=$extrusion ? '' : '<li>ligne de construction<img src="Vue/images/ligne2construction.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne ligne de construction"> pour cr&eacute;er l&aos;axe de r&eacute;volution.</li>'?>
		<li>cotation intelligente<img src="Vue/images/cotation.png" style="vertical-align:middle" alt="ic&ocirc;ne cotation intelligente">pour coter votre esquisse.</li>
		</ul>
		<p>Vid&eacute;o de d&eacute;monstration &agrave; venir.</p>
		</div>
		<?php /* <a href="Articles/<?=$this->dossier?>/esquisse.avi">Montre moi</a> */
	}

	public function MiseEnVolume($extrusion = true, $dépouille =false) {
		?>

		<div id="Phase">
		<h2>Fonction de mise en volume</h2>
		<ol>
		<li>Dans la barre d&apos;outils, s&eacute;lectionnez l&apos;alpha <b>Fonctions</b> (premier alpha) :<img src="Vue/images/fonctions.png" style="vertical-align:middle" alt="Barre d&apos;outils Fonctions."></li>
		<li>Cliquez sur l&apos;ic&ocirc;ne <b><?=$extrusion ? 'Base/Bossage extrud&eacute;' : 'Base bossage avec r&eacute;volution'?></b>
		<img src="Vue/images/<?=$extrusion ? 'extrusion' : 'revolution'?>.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne de mise en volume">
		<?=$extrusion ? ' premi&egrave;re' : ' deuxi&egrave;me'?> ic&ocirc;ne.</li>

		<p class="gauche"><img src="Vue/images/param_<?=$extrusion ? 'extrusion' : 'revolution'?>.png" alt="param&egrave;tres"></p>
		<li style="margin-top:50px">A gauche de l&apos;&eacute;cran apparaissent les param&egrave;tres</li>
		<li><?=$extrusion ? 'Dans la partie <b>Direction 1</b>, inscrivez la profondeur ici 70 mm' : 'Si la case <b>Axe de r&eacute;volution</b> n&apos;est renseign&eacute;e (ici ligne5) il faut sélectionner l&apos;axe de r&eacute;volution'?>.</li>
		<?php if (($extrusion) && ($dépouille))
			echo '<li>Cliquez sur l&apos;ic&ocirc;ne d&eacute;pouille <img src="Vue/images/depouille.png" style="height:30px; vertical-align:middle" alt="icocirc:ne d&eacute;pouille"> puis entrez l&apos;angle en degr&eacute;s.</li>';
		?>
		<li>Enfin validez en cliquant sur <img src="Vue/images/validation.png" style="height:30px; vertical-align:middle" alt="icocirc:ne d&eacute;pouille"> en haut à gauche.</li>
		</ol>
		<p>Vid&eacute;o de d&eacute;monstration &agrave; venir.</p>
		</div>
		<?php /* <a href="Articles/<?=$this->dossier?>/miseEnVolume.avi">Montre moi</a> */
	}
}

class PageErreur extends ErreurPEUNC
{
	public function Section()
	{
		parent::Section();
		?>
		<p>S&eacute;lectionnez un des onglets en haut de cette page.</p>
		<p>Si le probl&egrave;me persiste envoyez-moi un courriel en <a href="faq.sw@free.fr">cliquant ici</a>.</p>
		<?php
	}
}

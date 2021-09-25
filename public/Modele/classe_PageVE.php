<?php
require"Modele/classe_PageArticle.php";

class PageVE extends PageArticle	{
	private $titre;
	private $icone_principale;
	private $parRévolution;
	private $T_page	= ['plan d&apos;esquisse', 'Esquisse cot&eacute;e', 'Fonction de mise en volume'];

	public function __construct(array $TparamURL = [])	{
		parent::__construct($TparamURL);
		$this->setCSS(["https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline",	"commun",	"article",	"creationVE", "winkPlayer"]);
		$this->setView("pageVE.html");
	}

	public function setDossier($dossier) { $this->dossier = "Piece/" . $dossier . "/"; }

	public function setTitre($titre) { $this->titre = $titre; }
	public function getTitre()	{ return"Cr&eacute;er " . $this->titre; }

	public function setIconePrincipale($icone_principale) { $this->icone_principale = $icone_principale; }
	public function getIconePrincipale() {
		return $this->icone_principale;
	}

	public function setObtenuParRévolution($flag) { $this->parRévolution = $flag; }
	public function getObtenuParRévolution() { return $this->parRévolution; }

	// gestion des pages numérotées
	public function PageNumérotée()	{
		switch($this->getParamURL())	{
			case 1: $page = "esquisse";	break;
			case 2: $page = "fonction";	break;
			default: $page = "plan";
		}
		return "VE{$page}.html";
	}

	public function AfficherPagineur($url)	{
		$No_page = $this->getParamURL();
		$code = "\n\t<ol>\n";
		for($i=0;$i<3;$i++) {
			$code .= "\t\t<li>";
			$code .= $i == $No_page ? "<b>"  : '<a href="' . $url . '?' . $i . '">';
			$code .= $this->T_page[$i];
			$code .= $i == $No_page ? "</b>" : "</a>";
			$code .= "</li>\n";
		}
		return $code . "\t</ol>\n\t";
	}

	public function LecteurVidéo() {
		if (($this->getParamURL() == 1) || ($this->getParamURL() == 2))
			$code = "<!-- Vidéos en construction -->\n\t<p>Vid&eacute;o de d&eacute;monstration &agrave; venir.</p>\n";
		else {
			ob_start();
?>
	<div class="winkVideoContainerClass">
		<video class="winkVideoClass" data-varname="winkVideoData">
			<source src="/videos/planDesquisse.mp4" type="video/mp4">
		</video>
			<div class="winkVideoOverlayClass"></div>
			<div class="winkVideoControlBarClass">
				<button class="winkVideoControlBarPlayButtonClass"></button>
				<button class="winkVideoControlBarPauseButtonClass"></button>
				<div class="winkVideoControlBarProgressLeftClass"></div>
				<div class="winkVideoControlBarProgressEmptyMiddleClass"></div>
				<div class="winkVideoControlBarProgressRightClass"></div>
				<div class="winkVideoControlBarProgressFilledMiddleClass"></div>
				<div class="winkVideoControlBarProgressThumbClass"></div>
			</div>
			<div class="winkVideoPlayOverlayClass"></div>
	</div>
<?php	$code = ob_get_contents();
		ob_get_clean();
		}
		return $code;
	}
}

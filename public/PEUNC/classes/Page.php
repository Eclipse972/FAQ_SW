<?php
// classe-mère des pages de PEUNC
namespace PEUNC\classes;

include"API_page.php";

class Page implements iPage	{
	// dossiers pas défaut
	const DOSSIER_MODEL		= 'Modele/';
	const DOSSIER_VUE		= 'Vue/';
	const DOSSIER_CONTROLEUR= 'Controleur/';
	const DOSSIER_IMAGE		= 'images/';
	const DOSSIER_CSS		= 'CSS/';
	const DOSSIER_JS		= 'js/';
	const DOSSIER_VIDEO		= 'video/';

	protected $BD;
	protected $titrePage;
	protected $T_CSS;
	protected $entetePage;
	protected $scriptSection;
	protected $PiedDePage;
	protected $vue;
	protected $T_paramURL;

	public function __construct(array $TparamURL = [])	{
		$this->BD			= new BDD;
		// valeurs par défaut
		$this->titrePage	= "Titre de la page affiché dans la barre du haut du navigateur";
		$this->T_CSS		= [];
		$this->entetePage	= "En-tête de la page affichée";
		$this->scriptSection= "<h1>Page vide</h1>\n<p>Contenu en construction...</p>\n";
		$this->PiedDePage	= "<p>Pied de page &agrave; d&eacute;finir";

		// paramètres passés par l'URL
		$this->T_paramURL	= [];
		foreach($TparamURL as $valeur)
			$this->T_paramURL[] = htmlspecialchars($valeur);

		// exécution du controleur
		$script = $this->BD->Controleur($_SESSION['alpha'], $_SESSION['beta'],$_SESSION['gamma']);
		if($script == '')
			throw new Exception("Controleur non d&eacute;fini");
		else {
			if (file_exists(self::DOSSIER_CONTROLEUR . $script))
				require(self::DOSSIER_CONTROLEUR . $script);
			else throw new Exception("Controleur inexistant");
		}
	}
/* ***************************
 * MUTATEURS (SETTER)
 * ***************************/
	public function setCSS(array $Tableau)	{
		$this->T_CSS = [];	// les classes filles devront redéfinir pour elles-mêmes la listes des CSS
		foreach($Tableau as $feuilleCSS)	{
			if(substr($feuilleCSS,0,4) == 'http')
				$this->T_CSS[] = $feuilleCSS;	// pas de vérification
			else {
				$feuilleCSS = self::DOSSIER_CSS . $feuilleCSS . ".css";
				if(file_exists($feuilleCSS))
					$this->T_CSS[] = '/' . $feuilleCSS;
				else { /* À faire: traitement en cas d'inexistence */ }
			}
		}
	}

	public function setTitle($titre)	{
		$this->titrePage = $titre;
	}

	public function setHeaderText($texte)	{
		$this->entetePage = $texte;
	}

	public function setSection($code)	{
		$this->scriptSection = $code;
	}

	public function setFooter($code)	{
		$this->PiedDePage = $code;
	}

	public function setView($fichier)	{
		if (file_exists(self::DOSSIER_VUE . $fichier))
			$this->vue = self::DOSSIER_VUE . $fichier;
		else throw new Exception("Vuer inexistante");
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

	public function getHeaderText() {
		echo $this->entetePage,"\n";
	}

	public function getSection()	{
		echo $this->scriptSection;
	}

	public function getFooter()	{
		echo $this->PiedDePage;
	}

	public function getView()	{
		return $this->vue;
	}

	public function getParamURL($i = 0)	{
		return (isset($this->T_paramURL[$i])) ? $this->T_paramURL[$i] : null;
	}

/* ***************************
 * AFFICHAGE
 * ***************************/
	public static function BaliseImage($src, $alt = '<b>Image ici</b>', $code = '')	{
		if(substr($src,0,4) != 'http')	{	// fichier interne?
			//		chemin absolu?				suppression de / au début		ajout dossier image
			$src = (substr($src,0,1) == '/') ? substr($src,1,strlen($src)) : self::DOSSIER_IMAGE . $src;
			$src = (file_exists($src)) ? '/' . $src : "/PEUNC/images/image_absente.png";
		}
		return '<img src="' . $src . '" alt="' . $alt . '" ' . $code . '>';
	}
}

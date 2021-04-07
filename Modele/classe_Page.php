<?php
abstract class Page {
/*
*/
	protected $BD;

	abstract public function CSS();
	abstract public function Section();

	public function __construct() { $this->BD = new base2donnees; }

	public function CodeCSS($nom)	{ echo "<link rel=\"stylesheet\" href=\"Vue/{$nom}.css\" />\n"; }

	public function LienFormulaire() { echo " - <a href=\"?formulaire=1\">Me contacter</a>\n"; }

	public function Onglets() {
		$T_Onglets = $this->BD->Liste_onglets();
		echo "<ul>\n";
		foreach($T_Onglets as $onglet => $code)
			echo "\t\t<li>", (($onglet == $_SESSION['onglet']) ? str_replace('href', 'id="onglet_actif" href', $code) : $code), "</li>\n";
		echo "\t</ul>\n";
	}

	public function Menu() {
		$T_item = $this->BD->Liste_items();
		echo "<nav>\n\t<ul>\n";
		foreach($T_item as $item => $code) {
			echo "\t\t<li>", (($item == $_SESSION['item']) ? str_replace('href', 'id="item_actif" href', $code) : $code), "</li>\n";
			if ($item == $_SESSION['item']) {	// sous-menu?
				$T_sous_item = $this->BD->Liste_sous_items();
				if (isset($T_sous_item)) {	// génération sous-menu s'il existe
					echo "\t\t<ul>\n";
					foreach($T_sous_item as $sous_item => $sous_code)
						echo "\t\t\t<li>", ($sous_item == $_SESSION['sous_item']) ? str_replace('href', 'id="sous_item_actif" href', $sous_code) : $sous_code, "</li>\n";
					echo "\t\t</ul>\n";
				}
			}
		}
		echo "\t</ul>\n</nav>\n";
	}

	public function ArticlesConnexes() { echo "<aside>\n\t<h1>Pages connexes</h1>\n</aside>\n"; }
}

// Classes filles

class PageArticle extends Page {
	private $lienArticle;

	public function __construct() {
		parent::__construct();
		$dossier = $this->BD->DossierArticle();
		if (isset($dossier)) {
			$chemin = "Articles/{$dossier}/page.html";
			if (file_exists($chemin))
				$this->lienArticle = $chemin;
			else header("location:?erreur=1");
		} else header("location:?erreur=404");
	}

	public function CSS()	{ $this->CodeCSS("article"); }

	public function Section() { include $this->lienArticle; }
}

class PageAccueil extends Page { // la page 
	
	public function __construct() {
		parent::__construct();
		$_SESSION['onglet'] = $_SESSION['item'] = $_SESSION['sous_item'] = 0;
	}

	public function CSS()	{ $this->CodeCSS("article"); }

	public function Section() { include "Articles/accueil/page.html"; }

}

class PageErreur extends Page {

	public function __construct() {
		parent::__construct();
		$_SESSION['onglet'] = -1;	// aucun onglet sélectionné
	}

	public function Menu() { echo "<nav></nav>"; }
	
	public function ArticlesConnexes() { echo ""; }

	public function CSS() { $this->CodeCSS("erreur"); }

	public function Section() {
		$code_erreur = intval($_GET['erreur']);
		$code_erreur = ($this->BD->TexteErreur($code_erreur) == '') ? 0 : $code_erreur;
?>
	<h1>Erreur <?=$code_erreur?>: <?=$this->BD->TexteErreur($code_erreur)?></h1>
	<p>S&eacute;lectionnez un des onglets en haut de cette page.</p>
	<p>Si le probl&egrave;me persiste envoyez-moi un courriel en <a href="faq.sw@free.fr">cliquant ici</a>.</p>
<?php
	}
}

class PageFormulaire extends Page {
	// la valeur du paramètre formulaire n'a aucune incidence car elle n'est pas lue

	public function __construct() {
		parent::__construct();
		$_SESSION['onglet'] = -1;	// aucun onglet sélectionné
		if (empty($_POST)) { // préparation affichage du formulaire
			
		} else {	// traitement du formulaire
			
		}
	}

	public function Menu() { echo "<nav></nav>"; }
	
	public function ArticlesConnexes() { echo ""; }

	public function Afficher_validation() {}

	public function CSS() { $this->CodeCSS("formulaire"); }

	public function Section() {
?>
	<h1>Formulaire en construction</h1>
	<form method="post" action="?formulaire=1" id=formulaire>
		<p>Nom : <input 	 type="text" name="nom" /></p>
		<p>Courriel : <input type="email" name="courriel" /></p>
		<p>Objet : <input	 type="text" name="objet" /></p>
		<p>Message : <textarea name="message" rows="6"></textarea></p>
		<div id=validation>
			<p>Validation du formulaire</p>
			<ul>
			<?php $this->Afficher_validation();?>
			</ul>
			<p>Code	<input type="text" name="code" style="width:100px;" /></p>
		</div>
		<p style="text-align:center;">
			<input type="submit" value="Envoyer" style="width:100px; margin-right:200px" />
		</p>
	</form>
<?php
	}

	public function LienFormulaire() { echo ""; }
}


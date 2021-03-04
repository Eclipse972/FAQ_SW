<?php
abstract class Page {
/*
*/
	abstract public function CSS();
	abstract public function Section();

	public function CodeCSS($nom)	{ return "<link rel=\"stylesheet\" href=\"Vue/{$nom}.css\" />\n"; }

	public function LienFormulaire() { return " - <a href=\"?formulaire=1\">Me contacter</a>\n"; }

	public function Lien($texte, $onglet, $item = null, $sous_item = null, $page = null) { // l'existence de la page correpondante doit être vérifiée en amont
		$url = "?onglet={$onglet}";
		if (isset($item)) {
			$url .= "&item={$item}";
			if (isset($sous_item))	$url .= "&sous_item={$sous_item}";
		}
		return "<a href=\"{$url}\">{$texte}</a>\n";
	}

	public function Onglets() {
		$T_image = array('accueil',	'piece',		'MEP',			'assemblage',	'autre');
		$T_texte = array('Accueil',	'Pi&egrave;ce',	'Mise en plan',	'Assemblage',	'Autre');
		$code = "<ul>\n";
		for ($i = 0; $i<5; $i++) {
			$code .= "\t\t<li>";
			$code .= ($i == $_SESSION['onglet']	? "<a id=\"onglet_actif\" " : "<a ");
			$code .= "href=\"?onglet={$i}\"><img src=\"Vue/images/{$T_image[$i]}.png\" alt=\"{$T_texte[$i]}\">{$T_texte[$i]}</a></li>\n";
		}
		return $code."\t</ul>\n";
	}

	public function Menu() {
		$BD = new base2donnees;
		$T_item = $BD->Liste_items();
		$menu = "<ul>\n";
		foreach($T_item as $item => $code)
			if ($item == $_SESSION['item']) {
				$menu .= str_replace('href', 'id="item_actif" href', $code);
				$T_sous_item = $BD->Liste_sous_items();
				if (isset($T_sous_item)) {	// génération sous-menu s'il existe
					$menu .= "\t\t<ul>\n";
					foreach($T_sous_item as $sous_item => $sous_code)
						$menu .=  ($sous_item == $_SESSION['sous_item']) ? str_replace('href', 'id="sous_item_actif" href', $sous_code) : $sous_code;
					$menu .= "\t\t</ul>\n";
				}
			} else $menu .= $code;
		return $menu."\t</ul>\n";
	}

	public function ArticlesConnexes() { return "<h1>Pages connexes</h1>\n"; }
}

// Classes filles

class PageArticle extends Page {

	public function __construct() {
		$T_paramètresURL = array('onglet'=> 0,	'item'=> 0,	'sous_item'=> 0);	// paramètres autorisés
		// récupération des paramètres sans test de validité des valeurs
		foreach($T_paramètresURL as $clé => $valeur)	$T_paramètresURL[$clé] = (isset($_GET[$clé])) ? intval($_GET[$clé]) : 0;
		switch(  (isset($T_paramètresURL['onglet'])		? 1 : 0)
				+(isset($T_paramètresURL['item'])		? 2 : 0)
				+(isset($T_paramètresURL['sous_item'])	? 4 : 0))	{
			case 0: // aucun paramètre défini
			case 1: // onglet
			case 3: // onglet + item
			case 7: // onglet + item + sous-item
				foreach($T_paramètresURL as $clé => $valeur)	$_SESSION[$clé] = $T_paramètresURL[$clé];
				break;
			default: // toutes les autres combinaisons sont rejetées
				header("location:?erreur=2");
		}
	}

	public function CSS()	{ return $this->CodeCSS("article"); }

	public function Section() {
		$BD = new base2donnees;
		$lienArticle = $BD->Article();
		if(!file_exists($lienArticle))	header("location:?erreur=1");	// article non trouvé

		ob_start();
		include $lienArticle;
		$code  = ob_get_clean();
		ob_get_clean();
		return $code;
	}
}

class PageErreur extends Page {

	public function CSS() { return $this->CodeCSS("erreu"); }

	public function Section() {
		$DICO = array(	// dictionnaire
			// erreurs de mon application
			0	=> 'Erreur inconnue',
			1	=> 'L&apos;article a disparu',
			2	=> 'Probl&egrave;me avec les paramètres de l&apos;article',
			// erreurs serveur
			403	=> 'Acc&egrave;s interdit',
			404	=> 'Cette page n&apos;existe pas',
			500	=> 'Serveur satur&eacute;: essayez de recharger la page'
		);
		$code_erreur = intval($_GET['erreur']);
		$code_erreur = (isset($DICO[$code_erreur])) ? $code_erreur : 0;
		ob_start();
?>
		<h1>Erreur <?=$code_erreur?>: <?=$DICO[$code_erreur]?></h1>
		<p>S&eacute;lectionnez un des onglets en haut de cette page.</p>
		<p>Si le probl&egrave;me persiste envoyez-moi un courriel en <a href="faq.sw@free.fr">cliquant ici</a>.</p>
<?php
		$code = ob_get_contents();
		ob_get_clean();
		return $code;
	}
}

class PageFormulaire extends Page {

	public function CSS() { return $this->CodeCSS("formulaire"); }

	public function Section() {
		return "<p>Page formulaire en construction</p>";
	}

	public function LienFormulaire() { return ""; }
}


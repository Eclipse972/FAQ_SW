<?php
abstract class Page {
/*
*/
	abstract public function CSS();
	abstract public function Section();

	public function CodeCSS($nom)	{ return "<link rel=\"stylesheet\" href=\"Vue/{$nom}.css />\n"; }

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

	public function Menu() { return "Menu en construction"; }

	public function ArticlesConnexes() { return "<h1>Pages connexes</h1>\n"; }
}

// Classes filles

class PageArticle extends Page {

	public function CSS()	{ return $this->CodeCSS("article"); }

	public function Section() {
		return "<p>Page article en construction</p>";
	}
}

class PageErreur extends Page {

	public function CSS() { return $this->CodeCSS("erreu"); }

	public function Section() {
		return "<p>Page Erreur en construction</p>";
	}
}

class PageFormulaire extends Page {

	public function CSS() { $this->CodeCSS("formulaire"); }

	public function Section() {
		return "<p>Page formulaire en construction</p>";
	}

	public function LienFormulaire() { return ""; }
}


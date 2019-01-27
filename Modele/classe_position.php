<?php
class Position {	// identifiant des paramètres actuels ...
private $onglet;	// de 0 à 4 car il n'y a que 5 onglets
private $item;		// 0 signifie aucun item sélectionné donc le premier item à pour identifiant 1
private $sous_item;	// idem
private $article;	// identifiant de l'article
private $page;		// numéro de page de l'article
private $lien_page;	// adresse de la page de l'article 

// pour les finctions suivanes, la classes BD est nécessaire

public function __construct($onglet, $item = 0, $sous_item = 0, $No_page = 0) {
	$this->onglet = $onglet;		// 0 => onglet accueil
	$this->item = $item;			// 0 => pas d'item sélectionné
	$this->sous_item = $sous_item;	// 0 => pas de sous-item sélectionné
	$this->page = $No_page;			// 0 => page unique

	$BD = new base2donnees;
	$this->article = $BD->Cherche_article($onglet, $item, $sous_item);
}

public function Generer_sous_items() {
	// recherche a faire dans la BD
	/*$T_sous_item[1] = '<a href="#">sous-item 1</a>';
	$T_sous_item[2] = '<a href="#">sous-item 2</a>';
	$T_sous_item[3] = '<a href="#">sous-item 3</a>';
	$T_sous_item[4] = '<a href="#">sous-item 4</a>';
	return $T_sous_item;*/
}

private function Selectionner_Code($T_code, $id_actif, $etiquette) {
// T_code: tableau contenant les lignes de code HTML
// id_actif: No de la ligne sélectionée
// etiquette: étiquette pour la ligne sélectionnée

// modification de l'item sélectionné grâce à la variable $id_actif
$T_code[$id_actif] = '<a id="'.$etiquette.'"'.substr($T_code[$id_actif], 2); // <a href= ... est remplacé par <a id="étiquette" href=...
return $T_code;
}

public function Generer_onglets() {
	// il n'y a que 5 onglets immuables on stocke chaque ligne de code dans un tableau
	$T_code_onglets[0] = Lien('<img src="Vue/images/accueil.png" alt="accueil">Accueil', 0);
	$T_code_onglets[1] = Lien('<img src="Vue/images/piece.png" alt="pi&egrave;ce">Pi&egrave;ce', 1);
	$T_code_onglets[2] = Lien('<img src="Vue/images/MEP.png" alt="Mise en plan">Mise en plan', 2);
	$T_code_onglets[3] = Lien('<img src="Vue/images/assemblage.png" alt="Assemblage">Assemblage', 3);
	$T_code_onglets[4] = Lien('<img src="Vue/images/autre.png" alt="Autre">Autre', 4);
	
	$T_code_onglets = $this->Selectionner_Code($T_code_onglets, $this->onglet, 'onglet_actif');
	
	$code = "\t".'<ul>'."\n";
	for ($i = 0; $i<5; $i++) { $code .= "\t".'<li>'.$T_code_onglets[$i].'</li>'."\n"; }
	$code .= "\t".'</ul>'."\n";
	return $code;
}

public function Generer_menu() {
	$BD = new base2donnees;
	$T_item = $BD->Liste_items($this->onglet);
	if ($this->item>0) // item sélectionné?
		$T_item = $this->Selectionner_Code($T_item, $this->item, 'item_actif');

	// il va falloir intégrer le sous-menu à la bonne place
	$code = "\t".'<ul>'."\n";
	$i = 1;
	while (isset($T_item[$i])) {
		$code .= "\t".'<li>'.$T_item[$i].'</li>'."\n";
		$i++;
	}
	$code .= "\t".'</ul>'."\n";
	return $code;
}

public function Generer_titre() {
	$BD = new base2donnees;
	return $BD->Titre_article($this->article);
}

public function Generer_page() {
	$BD = new base2donnees;
	return $BD->Page_article($this->article, $this->page);	
}

}

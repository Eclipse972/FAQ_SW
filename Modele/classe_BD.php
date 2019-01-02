<?php
class base2donnees { // chaque requête doit commencer par une nouvelle connexion. =< utilisation de new à chaque appael
private $resultat;
private $BD; // PDO initialisé dans connexion.php

public function __construct($chemin = '') { // chemin de la forme 'chemin/'. Cette classe peut être demandé de plusiers endroits du site
	try	{// On se connecte à MySQL grâce au script non suivi par git
		include $chemin.'connexion.php'; // la config free ne permet pas d'adressage absolu
	} // contient: $this->BD = new PDO('mysql:host=hote;dbname=base;charset=utf8', 'identifiant', 'mot2passe');
	catch (Exception $e)	{ // En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}
}

private function Requete($requete, array $T_parametre) {
	$this->resultat = $this->BD->prepare($requete);
	// la liste de paramètres sous forme d'un tableau dans le même ordre que les ? dans la requête
	$this->resultat->execute($T_parametre);
}

private function Fermer() { $this->resultat->closeCursor(); }	 // Termine le traitement de la requête

public function ListeDvignettes() { // seule fonction à utiliser une requête sans paramètre
	$tableau = null;
	$this->resultat = $this->BD->query('SELECT ID, nom, pti_nom, dossier FROM Supports ORDER BY pti_nom ASC, nom ASC');
	while ($ligne = $this->resultat->fetch()) {
		$image = new Image($ligne['pti_nom'],'Supports/'.$ligne['dossier'].'/images/');
		$tableau[] = Lien($ligne['nom'].'<br>'.$image->Balise($ligne['nom']), $ligne['ID']);
	}
	$this->Fermer();
	return $tableau;
}
/*	**********************************************************************
	Toutes les fonctions qui suivent font appel à des requêtes paramétrées
	**********************************************************************
*/
public function Support($id) {
	$this->Requete('SELECT nom, pti_nom, dossier, article_ID, zip FROM Supports WHERE ID= ?', [$id]);
	$T_support = $this->resultat->fetch();
	$this->Fermer();
	return $T_support;
}

public function Support_existe($id) {
	$this->Requete('SELECT COUNT(*) AS nb_support FROM Supports WHERE ID= ?', [$id]);
	$T_reponse = $this->resultat->fetch(); // la réponse est un tableau
	$this->Fermer();
	return ($T_reponse['nb_support'] == 1);
}

public function Description_maquette($id) {
	$tableau = null;
	$this->Requete('SELECT texte FROM Commentaires WHERE support_ID= ? AND lien = "" ORDER BY ordre ASC', [$id]);
	while ($ligne = $this->resultat->fetch()) {
		$tableau[] = $ligne['texte'];
	}
	$this->Fermer();
	return $tableau;
}

public function Lien_support($id) {
	$tableau = null;
	$this->Requete('SELECT texte, lien FROM Commentaires WHERE support_ID= ? AND lien <> "" ORDER BY ordre ASC', [$id]);
	while ($ligne = $this->resultat->fetch()) {
		$tableau[] = '<a href="'.$ligne['lien'].'" target="_blank">'.$ligne['texte'].'</a>';
	}
	$this->Fermer();
	return $tableau;
}

public function Nomenclature($support_ID) {
	$tableau = null;
	$this->Requete('SELECT repere, quantite, Pieces.nom AS nom, formule AS matiere, URL_wiki, observation, fichier, assemblage, dossier
					FROM Supports, Pieces, Materiaux
					WHERE Pieces.matiere_ID=Materiaux.ID AND Supports.ID=Pieces.support_ID AND support_ID= ?
					ORDER BY repere ASC', [$support_ID]);
	while ($ligne = $this->resultat->fetch()) {
		$ligne['extension'] = ($ligne['assemblage']>0) ? '.EASM' : '.EPRT'; // la valeur numérique pour l'extension est remplacée par la version texte
		$tableau[] = new Piece($ligne);
	}
	$this->Fermer();
	return $tableau;
}
// Gestion du menu
public function Page_existe($support, $item, $sous_item) {
	$this->Requete('SELECT COUNT(*) AS nb_page FROM Items_menu WHERE support_ID= ? AND item= ? AND sous_item= ?', [$support, $item, $sous_item]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return ($reponse['nb_page'] == 1);
}

public function Script($support, $item, $sous_item) { // nom du script à exécuter
	$this->Requete('SELECT script FROM Items_menu WHERE support_ID= ? AND item= ? AND sous_item= ?',
					[$support, $item, $sous_item]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse['script'].'.php';
}

public function Parametres_script($support, $item, $sous_item) { // nom du script à exécuter
	$this->Requete('SELECT param1, param2, param3, param4 FROM Items_menu WHERE support_ID= ? AND item= ? AND sous_item= ?',
					[$support, $item, $sous_item]);
	$T_parametres = $this->resultat->fetch(); // la réponse est un tableau
	$this->Fermer();
	return $T_parametres;
}

public function Liste_item($support, $item) {
	$this->Requete('SELECT texte FROM Items_menu WHERE support_ID= ? AND sous_item=0', [$support]);
	$i=1;
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$tableau[$i] = ($i != $item) ? Lien($ligne['texte'], $support, $i) : Lien_item_selectionne($ligne['texte'], $support, $i);
		$i++;
	}
	$this->Fermer();
	return $tableau;
}

public function Liste_sous_item($support,$item,$sous_item) {
	$this->Requete('SELECT texte FROM Items_menu WHERE support_ID= ? AND item= ? AND sous_item>0', [$support, $item]);
	$i=1;
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$tableau[$i] = ($i != $sous_item) ? Lien($ligne['texte'], $support, $item, $i) : $ligne['texte'];
		//	si sous_item est le sélectonné alors lien 									sinon texte seul
		$i++;
	}
	$this->Fermer();
	return $tableau;
}

public function Texte_item($support,$item,$sous_item) { // renvoie le texte de l'item/sous-item
	$this->Requete('SELECT texte FROM Items_menu WHERE support_ID= ? AND item= ? AND sous_item= ?',
					[$support, $item, $sous_item]);
	$réponse = $this->resultat->fetch();
	$this->Fermer();
	return $réponse['texte'];
}

}

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

public function Cherche_article($onglet, $item = 0, $sous_item = 0) { // cherche l'identifiant de l'article
	$this->Requete('SELECT article_ID FROM Items WHERE onglet= ? AND item= ? AND sous_item= ?',
					[$onglet, $item, $sous_item]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return (isset($reponse['article_ID']) ? $reponse['article_ID'] : 0);
}

public function Page_article($id, $page = 0) {
	$this->Requete('SELECT dossier FROM Articles WHERE id = ?', [$id]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	$dossier = $reponse['dossier'];

	if ($page == 0) // article à page unique
		$fichier = 'page.html';
	else { // article de plusieurs pages: il faut rechercher le nom du fichier dans la BD
	}
	$lien = 'Articles/'.$dossier.'/'.$fichier;
	if(!file_exists('Articles/'.$dossier.'/'.$fichier))
		$lien = 'Articles/inexistant.html';
	return $lien;
}

public function Liste_items() { // crée un tableau qui va contenir le code des (sous-)items
	$this->Requete('SELECT * FROM Vue_menu WHERE onglet=?', [$_SESSION['onglet']]);
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$i = $ligne['item'];
		$tableau[$i] = $ligne['code'];
	}
	$this->Fermer();
	return $tableau;
}

public function Liste_sous_items() { // crée un tableau qui va contenir le code des (sous-)items
	$this->Requete('SELECT * FROM Vue_sous_menu WHERE onglet=? AND item=?', [$_SESSION['onglet'], $_SESSION['item']]);
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$i = $ligne['sous_item'];
		$tableau[$i] = $ligne['code'];
		$i++;
	}
	$this->Fermer();
	return $tableau;
}
}

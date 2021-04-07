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

public function ClassePage() {
	$this->Requete('SELECT * FROM Vue_classePage WHERE onglet= ? AND item= ? AND sous_item= ?', [$_SESSION['onglet'], $_SESSION['item'], $_SESSION['sous_item']]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse['nom'];
}

public function DossierArticle($page = 0) {
	$this->Requete('SELECT * FROM Vue_articleMenu WHERE onglet= ? AND item= ? AND sous_item= ?', [$_SESSION['onglet'], $_SESSION['item'], $_SESSION['sous_item']]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse['dossier'];
}

public function TexteErreur($code) {
	$this->Requete('SELECT texte FROM Erreur WHERE code= ?', [$code]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse['texte'];
}

public function Liste_onglets() { // crée un tableau qui va contenir le code des onglets
	$this->Requete('SELECT * FROM Vue_onglets', []);
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$i = $ligne['onglet'];
		$tableau[$i] = $ligne['code'];
	}
	$this->Fermer();
	return $tableau;
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
	}
	$this->Fermer();
	return $tableau;
}
}

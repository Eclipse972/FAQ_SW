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

public function Liste_niveau($niveau) {
	switch ($niveau) {
		case 1:	$index = 'onglet';		$expOnglet = '>=0';						$expItem = '= 0';					$signe = '=';	break;
		case 2:	$index = 'item';		$expOnglet = "= {$_SESSION['onglet']}";	$expItem = '> 0';					$signe = '=';	break;
		case 3:	$index = 'sous_item';	$expOnglet = "= {$_SESSION['onglet']}";	$expItem = "= {$_SESSION['item']}";	$signe = '>';	break;
		default: header("location:?erreur=3");	// tout autre valeur est rejetée
	}
	$sql = "SELECT {$index} AS i, code FROM Vue_code_item WHERE onglet {$expOnglet} AND item {$expItem} AND sous_item {$signe} 0";
	$this->Requete($sql, []);
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$i = $ligne['i'];
		$tableau[$i] = $ligne['code'];
	}
	$this->Fermer();
	return $tableau;
}

public function Liste_onglets()		{ return $this->Liste_niveau(1); } // tableau contenant le code des onglets

public function Liste_items()		{ return $this->Liste_niveau(2); } // tableau contenant le code des items

public function Liste_sous_items()	{ return $this->Liste_niveau(3); } // tableau contenant le code des sous-items
}

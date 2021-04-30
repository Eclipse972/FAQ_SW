<?php
// BDD de PEUNC
namespace PEUNC\classes;

class BDD {
protected $resultat;
protected $BD; // PDO initialisé dans connexion.php

public function __construct() {
	try	{// On se connecte à MySQL grâce au script non suivi par git
		include 'connexion.php';
	} // contient: $this->BD = new PDO('mysql:host=hote;dbname=base;charset=utf8', 'identifiant', 'mot2passe');
	catch (Exception $e)	{ // En cas d'erreur, on affiche un message et on arrête tout
		die('Erreur : '.$e->getMessage());
	}
}

protected function Requete($requete, array $T_parametre) {
	$this->resultat = $this->BD->prepare($requete);
	// la liste de paramètres sous forme d'un tableau dans le même ordre que les ? dans la requête
	$this->resultat->execute($T_parametre);
}

protected function Fermer() { $this->resultat->closeCursor(); }	 // Termine le traitement de la requête

public function ClassePage($alpha, $beta, $gamma) {
	$this->Requete('SELECT * FROM Vue_classePage WHERE alpha= ? AND beta= ? AND gamma= ?', [$alpha, $beta, $gamma]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse['nom'];
}

public function CherchePosition() {
	$this->Requete('SELECT niveau1, niveau2, niveau3 FROM Vue_URLvalides WHERE URL = ?', [$_SERVER['REDIRECT_URL']]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return array($reponse['niveau1'], $reponse['niveau2'], $reponse['niveau3']);
}

public function TexteErreur($code) {
	$this->Requete('SELECT texteMenu FROM Squelette WHERE alpha=-1 AND beta= ?', [$code]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse['texteMenu'];
}

public function Liste_niveau($niveau) {
	switch ($niveau) {
		case 1:	$index = 'alpha';	$expAlpha = '>=0';						$expBeta = '= 0';					$signe = '=';	break;
		case 2:	$index = 'beta';	$expAlpha = "= {$_SESSION['alpha']}";	$expBeta = '> 0';					$signe = '=';	break;
		case 3:	$index = 'gamma';	$expAlpha = "= {$_SESSION['alpha']}";	$expBeta = "= {$_SESSION['beta']}";	$signe = '>';	break;
		default: die("variable niveau incorrecte dans la BD");
	}
	$sql = "SELECT {$index} AS i, code FROM Vue_code_item WHERE alpha {$expAlpha} AND beta {$expBeta} AND gamma {$signe} 0";
	$this->Requete($sql, []);
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$i = $ligne['i'];
		$tableau[$i] = $ligne['code'];
	}
	$this->Fermer();
	return $tableau;
}

public function Controleur() {
	$this->Requete('SELECT controleur FROM Squelette WHERE alpha= ? AND beta= ? AND gamma= ?',
						[$_SESSION['alpha'], $_SESSION['beta'],$_SESSION['gamma']]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse[0];
}

public function PagesConnexes() {
	$this->Requete('SELECT URL FROM Vue_pagesConnexes WHERE alpha= ? AND beta= ? AND gamma= ?', [$_SESSION['alpha'], $_SESSION['beta'], $_SESSION['gamma']]);
	$reponse = $this->resultat->fetchAll();
	$this->Fermer();
	return $reponse;
}

}

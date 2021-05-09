<?php
// BDD de PEUNC
namespace PEUNC\classes;

class BDD {
protected $resultat;
protected $BD; // PDO initialisé dans connexion.php

public function __construct() {
	try	{
		require"connexion.php";
		$this->BD = new \PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $user , $pwd);
	}
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

public function CherchePosition($URL) {
	$this->Requete('SELECT niveau1, niveau2, niveau3 FROM Vue_URLvalides WHERE URL = ?', [$URL]);
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

public function Liste_niveau($alpha = null, $beta = null) {
	if(!isset($alpha))	{	// pour les onglets
		$index			= 'alpha';
		$expresionAlpha = '>=0';
		$expresionBeta	= '= 0';
		$signeGamma		= '=';
	} elseif(!isset($beta))	{	// pour le menu
		$index			= 'beta';
		$expresionAlpha = "= {$alpha}";
		$expresionBeta	= '> 0';
		$signeGamma		= '=';
	} else {	// pour le sous-menu
		$index			= 'gamma';
		$expresionAlpha = "= {$alpha}";
		$expresionBeta	= "= {$beta}";
		$signeGamma		= '>';
	}
	$sql = "SELECT {$index} AS i, URL, image, texte FROM Vue_code_item WHERE alpha {$expresionAlpha} AND beta {$expresionBeta} AND gamma {$signeGamma} 0";
	$this->Requete($sql, []);
	$tableau = null;
	while ($ligne = $this->resultat->fetch()) {
		$i = $ligne['i'];
		$tableau[$i] = '<a href="' . $ligne['URL'] . '">';
		$tableau[$i] .= ($ligne['image'] == '') ? '' : \PEUNC\classes\Page::BaliseImage($ligne['image'], $ligne['texte']);
		$tableau[$i] .= $ligne['texte'] . '</a>';
	}
	$this->Fermer();
	return $tableau;
}

public function Controleur($alpha, $beta, $gamma) {
	$this->Requete('SELECT controleur FROM Squelette WHERE alpha= ? AND beta= ? AND gamma= ?', [$alpha, $beta, $gamma]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse[0];
}

public function PagesConnexes($alpha, $beta, $gamma) {
	$this->Requete('SELECT URL FROM Vue_pagesConnexes WHERE alpha= ? AND beta= ? AND gamma= ?', [$alpha, $beta, $gamma]);
	$reponse = $this->resultat->fetchAll();
	$this->Fermer();
	return $reponse;
}

}

<?php
$LISTE = 'abcdefghijklmnopqrstuvwxyz';
/*
 A propos des 3 paramètres. Ce sont des entiers
 * onglet: identifiant de l'onglet de 0 à 4 car il n'y a que 5 onglets
 * item: 0 signifie aucun item sélectionné donc le premier item à pour identifiant 1
 * sous_item: idem
 */

function Lien($texte, $onglet, $item = null, $sous_item = null, $page = null) { // l'existence de la page correpondante doit être vérifiée en amont
	return '<a href="?p='.Creer_parametre($onglet, $item, $sous_item).'">'.$texte.'</a>';
}

// Lecture des paramètres
function Lire_parametre($nom) {
	global $LISTE;
	$param = substr((string) $_GET[$nom],0,4);	// le paramètre est converti en nombre chaîne de 4 caractères maxi
	// il faut chercher en premier si le dernier caractère est un chiffre
	// si oui l'extraire et l'enlever du paramètre
	// avec le nouveau paramètre le reste ne change pas
	$onglet		= (isset($param[0])) ? strpos($LISTE, $param[0]) : 0; 
	$item		= (isset($param[1])) ? strpos($LISTE, $param[1]) : 0;
	$sous_item	= (isset($param[2])) ? strpos($LISTE, $param[2]) : 0;
	return [$onglet, $item, $sous_item]; //[$onglet, $item, $sous_item];
}

// Ecriture des paramètres
function Creer_parametre($param1, $param2, $param3) {
	global $LISTE;
	$parametre = $LISTE[(int)$param1];
	if (isset($param2)) {
		$parametre .= $LISTE[(int)$param2];
		if (isset($param3))	$parametre .= $LISTE[(int)$param3];
	}
	// /!\ avec les pages la fonction ne sera plus aussi simple
	return $parametre;
}

/*function Parametres_support_courant() {
	if (isset($_SESSION['support'])) {
		$oSupport = unserialize($_SESSION['support']);
		return '?p='.Creer_parametre($oSupport->ID(), $oSupport->Item(), $oSupport->Sous_item());
	} else return 'index.php';
}*/

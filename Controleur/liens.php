<?php
/*
 A propos des 3 paramètres. Ce sont des entiers
 * onglet: identifiant de l'onglet de 0 à 4 car il n'y a que 5 onglets
 * item: 0 signifie aucun item sélectionné donc le premier item à pour identifiant 1
 * sous_item: idem
 */

function Lien($texte, $onglet, $item = null, $sous_item = null, $page = null) { // l'existence de la page correpondante doit être vérifiée en amont
	return '<a href="?'.Creer_parametre($onglet, $item, $sous_item).'">'.$texte.'</a>';
}

// Lecture des paramètres
function Lire_parametre() {
	$onglet		= isset($_GET['onglet'])	? intval($_GET['onglet'])	: 0;
	$item		= isset($_GET['item'])		? intval($_GET['item'])		: 0;
	$sous_item	= isset($_GET['sous_item'])	? intval($_GET['sous_item']): 0;
	return [$onglet, $item, $sous_item];
}

// Ecriture des paramètres
function Creer_parametre($param1, $param2, $param3) {
	$parametre = "onglet={$param1}";
	if (isset($param2)) {
		$parametre .= "&item={$param2}";
		if (isset($param3))	$parametre .= "&sous_item={$param3}";
	}
	return $parametre;
}

<?php
/***********************************************************************************************************************************
	contrôleur principal
************************************************************************************************************************************/
require 'Modele/classe_BD.php';
require 'Modele/classe_traceur.php';
require 'Modele/classe_Page.php';
require 'Modele/classe_valideur.php';

session_start();
/* contexte sauvegardé dans la session
 * alpha		0 => alpha accueil
 * item			0 => pas d'item sélectionné
 * sous_item	0 => pas de sous-item sélectionné
 *
 * fonctionnalité à venir: article de plusieurs pages
 * page;		0 => page unique
 * */
$TRACEUR = new Traceur; // voir avant dernière ligne pour affichage du rapport

$T_paramètresURL = array('alpha'=> 0,	'erreur'=> 0);	// paramètres principaux
// récupération des paramètres sans test de validité des valeurs
foreach($T_paramètresURL as $clé => $valeur)	$T_paramètresURL[$clé] = (isset($_GET[$clé])) ? intval($_GET[$clé]) : null;

switch(  (isset($T_paramètresURL['alpha'])	? 1 : 0)
		+(isset($T_paramètresURL['erreur'])	? 4 : 0))
{
case 0: // aucun paramètre défini
	$PAGE = new PageAccueil();
	break;
case 1: // alpha défini
	$T_paramètresURL = array('alpha'=> 0,	'item'=> 0,	'sous_item'=> 0);	// paramètres autorisés
	// récupération des paramètres sans test de validité des valeurs
	foreach($T_paramètresURL as $clé => $valeur)	$T_paramètresURL[$clé] = (isset($_GET[$clé])) ? intval($_GET[$clé]) : 0;
	switch(  (isset($T_paramètresURL['alpha'])		? 1 : 0)
			+(isset($T_paramètresURL['item'])		? 2 : 0)
			+(isset($T_paramètresURL['sous_item'])	? 4 : 0))	{
		case 1: // alpha
		case 3: // alpha + item
		case 7: // alpha + item + sous-item
			foreach($T_paramètresURL as $clé => $valeur)	$_SESSION[$clé] = $T_paramètresURL[$clé];
			$BD = new base2donnees;
			$classePage = $BD->ClassePage();
			if (isset($classePage))
				$PAGE = new $classePage;
			else header("location:?erreur=404");
			break;
		default: // toutes les autres combinaisons sont rejetées
			header("location:?erreur=2");
	}
	break;
case 4: // erreur
	$PAGE = new PageErreur();
	break;
default: // toutes les autres combinaisons sont rejetées
	header("location:?erreur=404");
}

include"Vue/doctype.html";	// utilise les métode de l'objet page

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
 * onglet		0 => onglet accueil
 * item			0 => pas d'item sélectionné
 * sous_item	0 => pas de sous-item sélectionné
 *
 * fonctionnalité à venir: article de plusieurs pages
 * page;		0 => page unique
 * */
$TRACEUR = new Traceur; // voir avant dernière ligne pour affichage du rapport

$T_paramètresURL = array('onglet'=> 0,	'formulaire'=> 0,	'erreur'=> 0);	// paramètres principaux
// récupération des paramètres sans test de validité des valeurs
foreach($T_paramètresURL as $clé => $valeur)	$T_paramètresURL[$clé] = (isset($_GET[$clé])) ? intval($_GET[$clé]) : null;

switch(  (isset($T_paramètresURL['onglet'])		? 1 : 0)
		+(isset($T_paramètresURL['formulaire']) ? 2 : 0)
		+(isset($T_paramètresURL['erreur'])		? 4 : 0))
{
case 0: // aucun paramètre défini
	$PAGE = new PageAccueil();
	break;
case 1: // onglet défini
	if ($T_paramètresURL['onglet'] > 4)	header("location:?erreur=404");
	$PAGE = new PageArticle();
	break;
case 2: // formulaire
	$PAGE = new PageFormulaire();// le contexte reste inchangé
	break;
case 4: // erreur
	$PAGE = new PageErreur();	// le contexte reste inchangé
	break;
default: // toutes les autres combinaisons sont rejetées
	header("location:?erreur=404");
}

include"Vue/doctype.html";	// utilise les métode de l'objet page

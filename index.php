<?php
/***********************************************************************************************************************************
	contrôleur principal
************************************************************************************************************************************/
// PEUNC
require 'PEUNC/classes/Page.php';
// fin PEUNC

require 'Modele/classe_BD.php';
require 'Modele/classe_traceur.php';
require 'Modele/classe_Page.php';
require 'Modele/classe_valideur.php';

session_start();
/* contexte sauvegardé dans la session
 * alpha		0 => alpha accueil
 * beta			0 => pas d'beta sélectionné
 * gamma	0 => pas de sous-beta sélectionné
 *
 * fonctionnalité à venir: article de plusieurs pages
 * page;		0 => page unique
 * */
$TRACEUR = new Traceur; // voir avant dernière ligne pour affichage du rapport
$T_paramètresURL = array('alpha', 'beta', 'gamma');	// paramètres principaux

foreach($T_paramètresURL as $valeur)								// récupération des paramètres
	$_SESSION[$valeur] = (isset($_GET[$valeur])) ? intval($_GET[$valeur]) : 0;// sans test de validité des valeurs

$BD = new base2donnees;
$classePage = $BD->ClassePage();
if (isset($classePage))
	$PAGE = new $classePage;
else header("location:?alpha=-1&beta=404");

include"Vue/doctype.html";	// utilise les méthodes de l'objet page

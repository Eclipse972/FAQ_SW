<?php
 // contrôleur principal de PEUNC

require 'PEUNC/classes/Page.php';
require 'PEUNC/classes/BDD.php';

include "classesUtilisateur.php";

session_start();
/* contexte sauvegardé dans la session (alpha, beta, gamma) par importance décroissante
	Si alpha >=0 => pages du site
	(X;0;0) => page de 1er niveau. 	(0;0;0) -> page d'accueil.

	(X;Y;0) avec Y>0 => page de 2e niveau

	(X;Y;Z) avec Z>0 => page de 3e niveau

	si alpha<0 => page spéciales PEUNC
	(-1;code;0) -> page d'erreur avec son code
	(-2;0;0) formulaire de contact
	Toute autre configuration provoque une erreur 404
*/
$T_paramètresURL = array('alpha', 'beta', 'gamma');	// paramètres principaux

foreach($T_paramètresURL as $valeur)								// récupération des paramètres
	$_SESSION[$valeur] = (isset($_GET[$valeur])) ? intval($_GET[$valeur]) : 0;// sans test de validité des valeurs

$BD = new base2donnees;
$classePage = $BD->ClassePage();
if (!		isset($classePage))	header("location:?alpha=-1&beta=404");
if (!class_exists($classePage))	die('La classe page demand&eacute; n&apos;existe pas.');
$PAGE = new $classePage;

include"Vue/doctype.html";	// utilise les méthodes de l'objet page

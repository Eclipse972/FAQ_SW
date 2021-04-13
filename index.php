<?php
require 'PEUNC/classes/Page.php';	require 'PEUNC/classes/BDD.php'; // utilisation de PEUNC

require 'Modele/classe_BD.php';
require 'Modele/classe_traceur.php';
require 'Modele/classe_Page.php';

session_start();
/* contexte sauvegardé dans la session (alpha, beta, gamma) par importance décroissante
	(X;0;0) => page de 1er niveau.
 		X=0 -> page d'accueil.
 		Si X<0 on tombe sur les pages spéciales de PEUNC
 		(-2;0;0) formulaire de contact
	(X;Y;0) avec Y>0 => page de 2e niveau
		(-1;code;0) -> page d'erreur avec son code
	(X;Y;Z) avec Z>0 => page de 3e niveau
	Toute autre configuration provoque une erreur 404
*/
$TRACEUR = new Traceur; // voir avant dernière ligne pour affichage du rapport
$T_paramètresURL = array('alpha', 'beta', 'gamma');	// paramètres principaux

foreach($T_paramètresURL as $valeur)								// récupération des paramètres
	$_SESSION[$valeur] = (isset($_GET[$valeur])) ? intval($_GET[$valeur]) : 0;// sans test de validité des valeurs

$BD = new base2donnees;
$classePage = $BD->ClassePage();
if (!		isset($classePage))	die('Classe page non d&eacute;finie dans la BBD.');
if (!class_exists($classePage))	die('La classe page demand&eacute; n&apos;existe pas.');
$PAGE = new $classePage;

include"Vue/doctype.html";	// utilise les méthodes de l'objet page

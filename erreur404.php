<?php
// Je me suis largement inspiré du code trouvé sur la page: http://urlrewriting.fr/tutoriel-urlrewriting-sans-moteur-rewrite.htm
// merci à son auteur

header("Status: 200 OK", false, 200);	// modification pour dire au navigateur que tout va bien

require_once 'PEUNC/classes/BDD.php';
$BD = new PEUNC\classes\BDD;

list($alpha, $beta, $gamma) = $BD->CherchePosition();

IF (isset($alpha))	{	// adresse valide, on ne touche à rien

} else {	// adresse invalide
	$alpha	= -1;
	$beta	= 404;
	$gamma	= 0;
}

// alimentation de GET
$_GET['alpha']	= $_REQUEST['alpha']	= $alpha;
$_GET['beta']	= $_REQUEST['beta']		= $beta;
$_GET['gamma']	= $_REQUEST['gamma']	= $gamma;
// $_GET = array('alpha' => $alpha, 'beta' = $beta, 'gamma' => $gamma) détruirait les autres éventuels paramètres

include"index.php";

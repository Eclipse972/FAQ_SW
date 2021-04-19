<?php	// contrôleur principal de PEUNC
require 'PEUNC/classes/Page.php';
require 'PEUNC/classes/BDD.php';

// classes utilisateur
require 'Modele/classe_Page.php';
//require 'Modele/classe_BDD.php';

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

$BD = new PEUNC\classes\BDD;

switch($_SERVER["REDIRECT_STATUS"]) {	// Toutes les erreurs serveur renvoient ici. Cf .htaccess
	case 403:
		header("location:/Erreur-Acces_interdit");
		break;
	case 500:
		header("location:/Erreur-Serveur_sature");
		break;
	case 200:
		$_SESSION['alpha'] = $_SESSION['beta'] = $_SESSION['gamma']	= 0;
		break;
	case 404:// Ma source d'inspiration pour détourner l'erreur 404. Merci à son auteur
			// http://urlrewriting.fr/tutoriel-urlrewriting-sans-moteur-rewrite.htm
		list($alpha, $beta, $gamma) = $BD->CherchePosition();
		IF (isset($alpha))	{	// adresse valide, on ne touche à rien
			header("Status: 200 OK", false, 200);	// modification pour dire au navigateur que tout va bien finalement
			list($_SESSION['alpha'], $_SESSION['beta'], $_SESSION['gamma']) = [$alpha, $beta, $gamma];	// $_SESSION = array('alpha' => $alpha, 'beta' = $beta, 'gamma' => $gamma) détruirait les autres éventuels paramètres
		} else	list($_SESSION['alpha'], $_SESSION['beta'], $_SESSION['gamma']) = [-1, 404, 0];	// l''adresse invalide reste affichée dans la barre d'adresse'
		break;
	default:
		header("location:/Erreur");
}

$classePage = $BD->ClassePage();
if (!		isset($classePage))	header("location:/Erreur>Page_inexistante");
if (!class_exists($classePage))	die("La classe {$classePage} n&apos;existe pas.");
$PAGE = new $classePage;

include"Vue/doctype.html";	// utilise les méthodes de l'objet page

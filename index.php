<?php
/***********************************************************************************************************************************
	contrôleur principal
************************************************************************************************************************************/
require 'Modele/classe_BD.php';
require 'Modele/classe_position.php';
require 'Modele/classe_traceur.php';
require 'Modele/classe_Page.php';
require 'Modele/classe_valideur.php';

session_start();
/* contexte sauvegardé dans la session
 * onglet		0 => onglet accueil
 * item			0 => pas d'item sélectionné
 * sous_item	0 => pas de sous-item sélectionné
 * page;		0 => page unique
 * */
$TRACEUR = new Traceur; // voir avant dernière ligne pour affichage du rapport

// Tri principal
switch((isset($_GET['onglet']) ? 1 : 0) + (isset($_GET['formulaire']) ? 2 : 0) +  (isset($_GET['erreur']) ? 4 : 0)) {
case 0: // aucun paramètre défini
	$_SESSION['onglet'] = $_SESSION['item'] = $_SESSION['sous_item'] = $_SESSION['page'] = 0;
	$PAGE = new PageArticle();
	break;
case 1: // onglet défini
	$_SESSION['onglet']		= intval($_GET['onglet']);
	$_SESSION['item']		= intval($_GET['item']);
	$_SESSION['sous_item']	= intval($_GET['sous_item']);
	$_SESSION['page']		= intval($_GET['page']);
	$PAGE = new PageArticle();
	break;
case 2: // formlaire
	$PAGE = new PageFormulaire();// le contexte reste inchangé
	break;
case 4: // erreur
	$PAGE = new PageErreur();	// le contexte reste inchangé
	break;
default: // toutes les autres combinaison sont rejetées
	header("location:?erreur=404");
}

// Variables pour la page HTML
$CSS		= $PAGE->CSS();
$ONGLETS	= $PAGE->Onglets();
$MENU		= $PAGE->Menu();
$section	= $PAGE->Section();
$ASIDE		= $PAGE->ArticlesConnexes();
$FORMULAIRE	= $PAGE->LienFormulaire();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline">
	<link rel="stylesheet" href="Vue/commun.css" />
	<?=$CSS?>
	<title>La Foire Aux Questions SolidWorks de ChristopHe</title>
</head>

<body>

<header>
<div id="logo"><img src="Vue/images/logo.png" alt = "Logo"></div>
<div id="titre">
	<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>
	<?=$ONGLETS?>
</div>
</header>

<main role="main"> <!--remarque: <main> suffit à Chrome pour tenir compte de la feuille de style.-->
<nav><?=$MENU?></nav>

<section><?=$SECTION?></section>

<aside><?=$ASIDE?></aside>

</main>

<footer>
	<p>Site optimis&eacute; pour <img src="Vue/images/chrome.png" alt="Chrome"> et <img src="Vue/images/firefox.png" alt="Firefox">
	 - <a target="_blank" href="http://dossiers.techniques.free.fr">Mes dossiers techniques en ligne</a>
	<?=$FORMULAIRE?>
	 - derni&egrave;re mise à jour: 15 janvier 2019</p>
</footer>

</body>
<?php $TRACEUR->afficher_rapport();?>
</html>

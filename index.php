<?php
/***********************************************************************************************************************************
	contrôleur principal
************************************************************************************************************************************/
require 'Modele/classe_BD.php';
require 'Modele/classe_position.php';
require 'Modele/classe_traceur.php';
require 'Modele/classe_valideur.php';
require 'Controleur/liens.php';

session_start(); // On démarre la session AVANT toute chose

$TRACEUR = new Traceur; // voir avant dernière ligne pour affichage du rapport
// détermination du mode pour le traitement et l'affichage
if ((empty($_GET)) || (preg_match("#^[a-e][a-z]{0,2}[1-9]{0,1}$#", $_GET["p"])))
	$MODE = 'FAQ';
elseif (isset($_GET["f"]))
	$MODE = 'formulaire';
else
	$MODE = 'erreur';
include 'Controleur/'.$MODE.'.php';
/* chacun des controleurs renvoie la configuration sous la forme d'un tableau associatif.
 * le contenu dépend de chaque mode.
 * A voir dans le code de chaque mode
 */
$CONFIG = Configurer();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,700&effect=outline">
	<link rel="stylesheet" href="Vue/commun.css" />
	<link rel="stylesheet" href="Vue/<?=$CONFIG['css']?>.css" />
	<title>La Foire Aux Questions SolidWorks de ChristopHe</title>
</head>

<body>

<header>
<div id="logo"><img src="Vue/images/logo.png" alt = "Logo"></div>
<div id="titre">
	<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>
<?php
	if ($MODE == 'FAQ') {
		$etat = unserialize($_SESSION['état']);
		echo $etat->Generer_onglets();
	}
?>
</div>
</header>

<main role="main"> <!--remarque: <main> suffit à Chrome pour tenir compte de la feuille de style.-->
<nav>
<?php echo $etat->Generer_menu(); ?>
</nav>

<section>
<?php include $etat->Generer_page(); ?>
</section>

<aside>
<h1>Articles connexes</h1>
<ul>
<li><a href="#">article 1</a></li>
<li><a href="#">article 2</a></li>
<li><a href="#">article 3</a></li>
</ul>
</aside>

</main>


<footer>
<?php include 'Vue/pied2page.php'; ?>
</footer>

</body>
<?php $TRACEUR->afficher_rapport();?>
</html>

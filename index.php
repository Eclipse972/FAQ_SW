<?php
/*********************************************************************************************************************************** 
	contrôleur principal
************************************************************************************************************************************/
require 'Modele/classe_BD.php';
require 'Modele/classe_navigation.php';
require 'Modele/classe_traceur.php';
require 'Modele/classe_valideur.php';

session_start(); // On démarre la session AVANT toute chose

$TRACEUR = new Traceur; // voir avant dernière ligne pour affichage du rapport
// détermination du mode pour le traitement et l'affichage
if ((empty($_GET)) || (preg_match("#^[a-zA-Z0-9]{1,3}$#", $_GET["p"])))
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
	<link rel="stylesheet" href="Vue/FAQ.css" />
	<title>La Foire Aux Questions SolidWorks de ChristopHe</title>
</head>

<body>

<header>
<div id="logo"><img src="Vue/images/logo.png" alt = "Logo"></div>
<div id="titre">
	<p class="font-effect-outline">Foire Aux Questions SolidWorks de ChristopHe</p>
	<ul>
	<li><a href="#"><img src="Vue/images/chrome.png" alt="Chrome">Accueil</a></li>
	<li><a id="onglet_selectionne" href="#"><img src="Vue/images/chrome.png" alt="Chrome">Pi&egrave;ce</a></li>
	<li><a href="#"><img src="Vue/images/chrome.png" alt="Chrome">Mise en plan</a></li>
	<li><a href="#"><img src="Vue/images/chrome.png" alt="Chrome">Assemblage</a></li>
	<li><a href="#"><img src="Vue/images/chrome.png" alt="Chrome">Autre</a></li>
	</ul>
</div>
</header>

<main role="main">

<nav>
<ul>
<li><a href="#">item 1</a></li>
<li><a id="item_selectionne" href="#">item 2</a></li>
	<ul>
	<li><a href="#">sous-item 1</a></li>
	<li>sous-item 2</li>
	<li><a href="#">sous-item 3</a></li>
	<li><a href="#">sous-item 4</a></li>
	</ul>
<li><a href="#">item 3</a></li>
<li><a href="#">item 4</a></li>
<li><a href="#">item 5</a></li>
</ul>
</nav>

<section>
<h1>Titre</h1>
<p>Corps de la page</p>
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
</html>

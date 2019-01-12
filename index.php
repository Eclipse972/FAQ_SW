<?php
/*********************************************************************************************************************************** 
	contrôleur principal
************************************************************************************************************************************/

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
	<li><a href="#">Accueil</a</li>
	<li><a href="#">Pi&egrave;ce</a></li>
	<li>Mise en plan</li>
	<li><a href="#">Assemblage</a</li>
	<li><a href="#">Autre</a</li>
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

<?php
ob_start();	// début du code <section>
?>
	<h1>Ins&eacute;rer une perspective personalis&eacute;e</h1>
	<p>Dans la plupart des cas les perspectives propos&eacute;e n&apos;offrent pas le meilleure point de vue. Il est possible de choisir un point de vue et de l&apos;ins&eacute;rer dans la mise en plan.</p>
	<h2>Proc&eacute;dure</h2>
	<ul>
	<li>ouvrir ou basculer vers le fichier pi&egrave;ce/assemblage</li>
	<li>orienter la pi&egrave;ce ou l&apos;assemblage pour offrir le meilleur point de vue</li>
	<li>basculer vers la mise en plan</li>
	<li>ouvrir la palette de vue</li>
	<li>cliquez sur le bouton actualiser (fl&egrave;ches vertes en haut à droite de la palette de vues)</li>
	<li>ins&eacute;rer la vue nomm&eacute;e <b>En cours</b> dans la mise en plan</li>
	</ul>
<?php
$this->setSection(ob_get_clean());

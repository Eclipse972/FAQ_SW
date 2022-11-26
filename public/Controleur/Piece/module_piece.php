<?php
ob_start();	// début du code <section>
?>
	<h1>Module pi&egrave;ce</h1>
	<p>C'est le module de base de SolidWorks. Sa fonction est de cr&eacute;er des pi&egrave;ce en 3D volumique. Il existe des logiciels permettant de faire de la 3D surfacique mais je n'en parlerai pas ici.</p>
	<p>Dans ce module on traite principalement de:</p>
	<ul>
	<li>esquisse 2D (dessin, contraintes d'esquisse, ...)</li>
	<li>fonctions (extrusion, r&eacute;volution, r&eacute;p&eacute;tition, ...)</li>
	<li>manipulation de ces pi&egrave;ces (zoom, rotation, coupe, ...)</li>
	</ul>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

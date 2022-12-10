<?php
ob_start();	// début du code <section>
?>
	<h1>Manipuler une pi&egrave;ce dans tous les sens</h1>
	<p>Il est possible de manipuler cette pi&egrave;ce de plusieurs mani&egrave;res dans la zone graphique.</p>
	<ul>
		<li>Tourner et/ou d&eacute;placer une pi&egrave;ce</li>
		<li>Couper la pi&egrave;ce pour voir ses formes int&eacute;rieures</li>
		<li>Changer la transparence et/ou la couleur d&apos;une pi&egrave;ce</li>
	</ul>
<?php
$this->setSection(ob_get_clean());

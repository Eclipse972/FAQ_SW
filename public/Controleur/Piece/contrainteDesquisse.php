<?php
ob_start();	// début du code <section>
?>
	<h1>Contrainte d&apos;esquisse</h1>
	<p>Permet de rajouter des contraintes géométrique</p>
	<ul>
		<li>parall&egrave;le<br>illustration &agrave; venir</li>
		<li>perpendiculaire<br>illustration &agrave; venir</li>
		<li>coaxialit&eacute;<br>illustration &agrave; venir</li>
		<li>&eacute;galit&eacute;<br>illustration &agrave; venir</li>
		<li>point milieu<br>illustration &agrave; venir</li>
		<li>coninc&iexcl;dence<br>illustration &agrave; venir</li>
	</ul>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

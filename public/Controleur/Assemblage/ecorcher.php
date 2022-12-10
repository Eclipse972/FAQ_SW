<?php
ob_start();	// début du code <section>
?>
	<h1>Cr&eacute;er un &eacute;corch&eacute;</h1>
	<p>Il est possible de cr&eacute;er un ou plusieurs &eacute;corch&eacute;.</p>
	<p>Dans cette section seront trait&eacute;s l'assemblage de pi&egrave;ces et de sous assemblages.</p>
<?php
$this->setSection(ob_get_clean());

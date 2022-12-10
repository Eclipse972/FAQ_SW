<?php
ob_start();	// début du code <section>
?>
	<h1>Les contraintes dans un assemblage</h1>
	<p>Les contraintes permettent d&apos;assembler des pi&egrave;ces pour construire un m&eacute;canisme.</p>
	<p>Dans cette section seront trait&eacute;s l'assemblage de pi&egrave;ces et de sous assemblages.</p>
<?php
$this->setSection(ob_get_clean());

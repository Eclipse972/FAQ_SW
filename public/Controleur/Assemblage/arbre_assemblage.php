<?php
ob_start();	// début du code <section>
?>
	<h1>L&apos;arbre de cr&eacute;ation d&apos;un assemblage</h1>
	<p>L&apos;arbre de cr&eacute;ation de l&apos;assemblage est l&apos;historique de cette assemblage.</p>
	<p>Dans cette section seront trait&eacute;s l'assemblage de pi&egrave;ces et de sous assemblages.</p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

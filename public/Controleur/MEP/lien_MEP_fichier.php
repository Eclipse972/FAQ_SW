<?php
ob_start();	// début du code <section>
?>
	<h1>Le lien entre une mise en plan et son fichier pi&egrave;ce ou assemblage</h1>
	<p>Toutes mises en plan est li&eacute;e &agrave; un fichier pi&egrave;ce ou un assemblage</p>
	<p>Cette liaison est bidirectionnelle et dynamique</p>
<?php
$this->setSection(ob_get_clean());

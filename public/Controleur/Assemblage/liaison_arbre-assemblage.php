<?php
ob_start();	// début du code <section>
?>
	<h1>Lien arbre de cr&eacute;ation -> zone graphique pour un assemblage</h1>
	<p>Page en construction</p>
	<p>Dans cette section seront trait&eacute;s l'assemblage de pi&egrave;ces et de sous assemblages.</p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

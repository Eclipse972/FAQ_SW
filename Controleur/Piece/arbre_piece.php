<?php
ob_start();	// début du code <section>
?>
	<h1>L&apos;arbre de cr&eacute;ation de la pi&egrave;ce</h1>
	<p>C&apos;est l&apos;hstorique de cr&eacute;ation de la pi&egrave;ce<p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

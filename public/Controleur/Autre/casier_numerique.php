<?php
ob_start();	// début du code <section>
?>
	<h1>Mettre un fichier dans mon casier num&eacute;rique</h1>
	<p>Cet article est plut&ocirc;t r&eacute;serv&eacute; &agrave; mes &eacute;l&egrave;ves.</p>
	<p>proc&eacute;dure:</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

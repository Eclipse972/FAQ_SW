<?php
ob_start();	// début du code <section>
?>
	<h1>Mise en page</h1>
	<p>Elle consiste bien choisir l&apos;chelle et r&eacute;partir les vues.</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

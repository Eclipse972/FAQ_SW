<?php
ob_start();	// début du code <section>
?>
	<h1>Lien arbre de cr&eacute;ation -> zone graphique pour une mise en plan</h1>
	<p>Page en construction</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

<?php
ob_start();	// début du code <section>
?>
	<img style="float:right" src="/images/Autre/pelleteuse.png">
	<h1>Zoom fen&ecirc;tre</h1>
	<p>On souhaite, par exemple, voir le si&egrave;ge de la pelleteuse de plus pr&egrave;s.</p>
	<ol>
	<li>Cliquez sur l&apos;icône <b>zoom fen&ecirc;tre</b></li>
	<li>Cliquez le coin sup&eacute;rieur gauche de la zone &agrave; zoomer puis faites glisser le
	curseur en maintenant appuy&eacute; le bouton gauche de la souris pour cr&eacute;er un rectangle
	entourant la zone &agrave; zoomer.</li>
	<li>L&acirc;chez le bouton de la souris et la zone &agrave; zoomer remplit la zone graphique.</li>
	</ol>
	<img style="width:500px" src="/images/Autre/siege.png">
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

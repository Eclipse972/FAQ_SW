<?php
ob_start();	// début du code <section>
?>
	<h1>Exporter une mise en plan en PDF</h1>
	<p>Il n'est pas pratique de transporter une mise en plan. En effet les fichiers pi&egrave;ces ou asemblages sont n&eacute;cessaires.</p>
	<p>Il est plus simple d&apos;exporter la mise en plan en pdf. Ceci permet d&apos;avoir un seul fichier et de l&apos;anvoyer par mail par exemple.</p>
	<h2>Proc&eacute;dure</h2>
	<ul>
	<li>sauvegardez votre mise en plan normalement</li>
	<li>cliquez sur <b>Enregistrer sous</b></li>
	<li>au nom de fichier, rajoutez votre nom de famille</li>
	<li>en dessous, le <b>Type</b> est une liste, cliquez sur <b>adobe portable document</b></li>
	<li>enregistrer le fichier dans votre répertoire</li>
	</ul>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

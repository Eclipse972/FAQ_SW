<?php
ob_start();	// début du code <section>
?>
	<h1>M&eacute;canique graphique</h1>
	<p>SolidWorks n&apos;est pas pr&eacute;vu pour faire de la m&eacute;canique graphique mais les outils d&apos;esquisse le permettent.</p>
<?php
$this->setSection(ob_get_clean());

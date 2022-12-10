<?php
ob_start();	// début du code <section>
?>
	<h1>D&eacute;placer l&apos;objet &agrave; l&apos;&eacute;cran</h1>
	<p>En constructon</p>
<?php
$this->setSection(ob_get_clean());

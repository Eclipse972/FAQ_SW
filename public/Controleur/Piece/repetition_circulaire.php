<?php
ob_start();	// début du code <section>
?>
	<h1>R&eacute;p&eacute;tition circulaire</h1>
	<p>Page en construction</p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

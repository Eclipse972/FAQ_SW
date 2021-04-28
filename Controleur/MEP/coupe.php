<?php
ob_start();	// début du code <section>
?>
	<h1>Ins&eacute;rer une vue en coupe</h1>
	<p>En construction</p>
<?php
$this->scriptSection = ob_get_contents();
ob_end_clean();

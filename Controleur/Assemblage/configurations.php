<?php
ob_start();	// début du code <section>
?>
	<h1>Les configurations</h1>
	<p>Les configurations permettent de voir un assemblage dans plusieurs &eacute;tats.</p>
	<p>Dans cette section seront trait&eacute;s l'assemblage de pi&egrave;ces et de sous assemblages.</p>
<?php
$this->scriptSection = ob_get_contents();
ob_end_clean();

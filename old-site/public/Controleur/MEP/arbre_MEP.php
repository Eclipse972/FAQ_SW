<?php
ob_start();	// début du code <section>
?>
	<h1>L&apos;arbre de cr&eacute;ation d&apos;une mise en plan</h1>
	<p>Comme dans les autres modules, la mise en plan poss&egrave;de un arbre de cr&eacute;ation.</p>
<?php
$this->setSection(ob_get_clean());

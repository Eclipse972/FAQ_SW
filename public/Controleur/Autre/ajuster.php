<?php
ob_start();	// début du code <section>
?>
	<h1>Ajuster le zoom</h1>
	<p>Il est parfois n&eacute;cessaire de r&eacute;ajuster le détail agrandi. Soir parce qu&apos;il est trop grand ou trop petit.</p>
	<p>Il suffit de faire rouler la molette de la souris pour ajuster le zoom.</p>
	<p>Remarque: il est maladroit d&apos;utiliser cette fonctionnalit&eacute; pour faire un zoom car on
	ne maitrise pas totalement la zone &agrave; agrandir. Il vaut mieux utiliser le zoom fen&ecirc;tre.</p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

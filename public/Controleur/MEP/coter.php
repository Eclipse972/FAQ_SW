<?php
ob_start();	// début du code <section>
?>
	<h1>Coter un dessin</h1>
	<p>La cotation concerne surtout les dessins de d&eacute;finition. C&apos;est &agrave; dire le dessin d'une pi&egrave;ce seule. Si la pi&egrave;ce &agrave; &eacute;t&eacute; r&eacute;alis&eacute;e correctement, elle contient la cotation.</p>
	<p>Pour un dessin d'ensemble, il peut être n&eacute;cessaire de rajouter quelques cotes comme les ajustement les d&eacute;placements de pi&egrave;ce.</p>
<?php
$this->setSection(ob_get_clean());

<?php
ob_start();	// début du code <section>
?>
	<h1>Les inclassables</h1>
	<p>Dans cette section sont regroup&eacute;s deux types d'articles.</p>
	<p>Les articles communs aux diff&eacute;rents modules comme les diff&eacute;rents zoom. </p>
	<p>Les articles sp&eacute;cifiques &agrave; mes classes comme d&eacute;poser un document dans mon casier num&eacute;rique.</p>
<?php
$this->setSection(ob_get_clean());

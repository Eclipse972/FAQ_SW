<?php
ob_start();	// début du code <section>
?>
	<h1>Mettre un fichier dans mon casier num&eacute;rique</h1>
	<p>Cet article est plut&ocirc;t r&eacute;serv&eacute; &agrave; mes &eacute;l&egrave;ves.</p>
	<p>Il n&apos;est pas possible d&apos;enregistrerr dans mon casiers num&eacute;rique. Par contre vous pouvez d&eacute;poser une copie de votre fichier.</p>
	<p>proc&eacute;dure:</p>
	<ol>
		<li>copier votre fichier: dans le menu: clic droit puis copier ou au clavier Ctrl+C</li>
		<li>rendez-vous dans le r&eacute;pertoire ....</li>
		<li>d&eacute;poser le fichier avec le menu: clic droit puis coller ou au clavier Ctrl+V</li>
	</ol>
	Remarque: <b>Dans mon casier vous ne pouvez rien modifier</b>. En d&apos;erreur de nom de fichier par exemple, il faut me demander de faire la modification.
<?php
$this->setSection(ob_get_clean());

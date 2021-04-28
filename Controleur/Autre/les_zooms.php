<?php
ob_start();	// début du code <section>
?>
	<h1>Les diff&eacute;rents zooms</h1>
	<p>Au milieu du bord haut de la zone graphique, se trouve la barre d&apos;outils graphique.</p>
	<img style="height:30px" src="/Controleur/Autre/barre_outils_graphiques.png" alt="barre d'outils graphiques">
	<p>La premi&egrave;re  ic&ocirc;ne est le "zoom au mieux" et la deuxi&egrave;me est "zoom fen&ecirc;tre". Elles sont reconnaissables &agrave; leur forme de loupe.</p>
	<p>Cliquez dans le menu &agrave; gauche pour savoir comment les utiliser.</p>
<?php
$this->scriptSection = ob_get_contents();
ob_end_clean();

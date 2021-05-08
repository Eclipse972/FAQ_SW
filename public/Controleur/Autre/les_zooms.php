<?php
ob_start();	// début du code <section>
?>
	<h1>Les diff&eacute;rents zooms</h1>
	<p>Au milieu du bord haut de la zone graphique, se trouve la barre d&apos;outils graphique.</p>
	<?=\PEUNC\classes\Page::BaliseImage("Autre/barre_outils_graphiques.png", "barre d'outils graphiques",'style="height:30px"')?>
	<p>La premi&egrave;re  ic&ocirc;ne est le "zoom au mieux" et la deuxi&egrave;me est "zoom fen&ecirc;tre". Elles sont reconnaissables &agrave; leur forme de loupe.</p>
	<p>Cliquez dans le menu &agrave; gauche pour savoir comment les utiliser.</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

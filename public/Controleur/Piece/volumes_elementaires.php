<?php
ob_start();	// début du code <section>
?>
	<h1>Volumes &eacute;l&eacute;mentaires</h1>
	<p>Voici quelques volumes &eacute;l&eacute;mentaires r&eacute;alisables rapidement avec SolidWorks.</p>
	<ul>
		<li>prisme droit</li>
		<li>cylindre</li>
		<li>tronc de c&ocirc;ne</li>
		<li>sph&egrave;re</li>
		<li>tore</li>
	</ul>
	<p>Faites votre choix dans le menu ci-contre.</p>
	<h2>La m&eacute;thode</h2>
	<p>Cr&eacute;er chacun de ces volumes suit toujours les m&ecirc;me &eacute;tapes:</p>
	<ol>
		<li>choisir un plan d&apos;esquisse (Face, Dessus ou Doite) dans l&apos;arbre de cr&eacute;ation<?=PEUNC\Page::BaliseImage("Piece/arbre.png","Arbre de cr&eacute;ation vide",'style="vertical-align:middle"')?></li>
		<li>dessiner l&apos;esquisse en utilisant la barre d'outils Esquissse (onglet)<?=PEUNC\Page::BaliseImage("Piece/outilsEsquisse.png","Barre d&apos;outils Esquisse")?></li>
		<li>coter l&apos;esquisse avec l&apos;ic&ocirc;ne cotation intelligente<?=PEUNC\Page::BaliseImage("cote.png","ic&ocirc;ne cotation intelligente",'style="vertical-align:middle"')?>. Deuxi&egrave;me de la barre d'outils Esquisse</li>
		<li>utiliser une fonction de mise en volume en utilisant la barre d'outils Fonctions (onglet)<?=PEUNC\Page::BaliseImage("Piece/fonctions.png","Barre d&apos;outils Fonctions")?></li>
	</ol>
	<p>Dans le menu s&eacute;lectionnez le volume que vous voulez cr&eacute;er.</p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

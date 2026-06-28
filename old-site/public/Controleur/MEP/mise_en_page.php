<?php
ob_start();	// d&eacute;but du code <section>
?>
	<h1>Mise en page</h1>
	<p>Elle consiste bien choisir l&apos;&eacute;chelle et r&eacute;partir &eacute;quitablement les vues sur la feuille.</p>

	<h1>Choisir l&apos;&eacute;chelle</h1>
	<p>Le dessin est produit avec un facteur d&apos;&eacute;chelle par d&eacute;faut. Si le dessin est trop petit ou trop grand, il faut changer le facteur d&apos;&eacute;chelle.</p>
	<ol>
	<li> Dans l&apos;arbre de cr&eacute;ation à gauche de l&apos;&eacute;cran, faites un clic droit sur Feuille1. Un menu contextuel apparaît</li>
	<?=PEUNC\Page::BaliseImage("MEP/feuillePropriete.png")?>
	<li>Cliquez sur Propri&eacute;t&eacute;s...</li>
	<li>Dans la boite de dialogue qui apparait changer le facteur d&apos;&eacute;chelle.</li>
	<li>Lorsque vous validez, le dessinn est affich&eacute; avec le nouveau facteur d&apos;&eacute;chelle. Si &ccedil;a ne convient pas, recommencez la proc&eacute;dure.</li>
	</ol>
	<p><a href=/Animations/echelle>Montre moi comment changer le facteur d&apos;&eacute;chelle</a></p>

	<h1>R&eacute;partir les vues sur le feuille</h1>
	<p>A tout moment, il est possible de d&eacute;placer les vues sur la zone de dessin. Pour d&eacute;placer une vue il suffit de placer le pointeur de la souris au bord de la vue. Lorsque l’icône qui l&apos;accompagne prend la forme d&apos;une croix fl&eacute;ch&eacute;e bleue <?=PEUNC\Page::BaliseImage("MEP/croixFlecheBleue.png", "croix flêch&eacute;e bleue", 'class="icone"')?> on peut d&eacute;placer la vue.</p>
	<p>Lors du d&eacute;placement des vues les alignements sont respect&eacute;s. Ceci</p>
	<ol>
	<li>Si on d&eacute;place la vue principale (vue de face) les autres vues se d&eacute;placent pour conserver l&apos;alignement.</li>
	<li>Le d&eacute;placement d&apos;une autre vue que la vue principale ne peut se faire que dans le sens de l&apos;alignemnt avec la vue principale</li>
	</ol>
	<p><a href=/Animations/miseEnPage>Montre moi comment répartir les vues</a></p>
<?php
$this->setSection(ob_get_clean());

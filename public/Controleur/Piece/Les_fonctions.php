<?php
ob_start();	// début du code <section>
?>
	<h1>Les fonctions volumiques</h1>
	<p>Ce sont elles qui permttent de cr&eacute;er chaque volume &eacute;l&eacute;mentaire qui coposent la pi&egrave;ce.</p>

	<h2>La barre d&apos;outil Fonctions</h2>
	<?=\PEUNC\classes\Page::BaliseImage("Piece/onglet_fonctions.png","onglet Fonctions",'width=98%')?>
	<p>C&apos;est le premier onglet de la barre d&apos;outils en haut de l&apos;&eacute;cran.</p>

	<h2>&Agrave; partir d&apos;une esquisse</h2>
	<p>A partir d&apos;une esquisse en 2D, les fonctions volumiques permettent de cr&eacute;er un volume &eacute;l&eacute;mentaire. Il y a trois principales mani&egrave;res de cr&eacute;er ce volume:</p>
	<div>
		<p>Extrusion</p>
		<?=\PEUNC\classes\Page::BaliseImage("Piece/extrusion.png","extrusion",'width=25%')?>
		<p>On empile des esquisses suivant une certaine hauteur</p>
	</div>
	<div>
		<p>R&eacute;volution</p>
		<?=\PEUNC\classes\Page::BaliseImage("Piece/revolution.png","R&eacute;volution","width=25%")?>
		<p>On fait tourner une esquisse autour d&apos;un axe. L&apos;angle est &eacute;gale &agrave; 360 degr&eacute;s pour un tout complet.</p>
	</div>
	<div>
		<p>Balayage</p>
		<?=\PEUNC\classes\Page::BaliseImage("Piece/balayage.png","Balayage;",'width=25%')?>
		<p>On fait suivre &agrave; l&apos;exsqisse un parcours</p>
	</div>
	<p>Dans un volume d&eacute;j&agrave; cr&eacute;&eacute;, il est possible d&apos;enlever de la mati&egrave;re suivant les m&ecirc;mes principes.</p>

	<h2>Cr&eacute;ation d&apos;un volume &eacute;l&eacute;mentaire par copie</h2>
	<p>Il est possible de cr&eacute;er des volumes par copie. L&apos;original peut &ecirc;tre un volume complexe.</p>
	<div>
		<p>Sym&eacute;trie</p>
		<?=\PEUNC\classes\Page::BaliseImage("Piece/symetrie.png","Sym&eacute;trie",'width=25%')?>
	</div>
	<div>
		<p>R&eacute;p&eacute;tition lin&eacute;aire</p>
		<?=\PEUNC\classes\Page::BaliseImage("Piece/repetition_lin.png","R&eacute;p&eacute;tition lin&eacute;aire",'width=25%')?>
	</div>
	<div>
		<p>R&eacute;p&eacute;tition circulaire</p>
		<?=\PEUNC\classes\Page::BaliseImage("Piece/repetition_circ.png","R&eacute;p&eacute;tition circulaire",'width=25%')?>
	</div>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

<?php
ob_start();	// début du code <section>
?>
	<h1>Les fonctions volumiques</h1>
	<p>Ce sont elles qui permttent de cr&eacute;er chaque volume &eacute;l&eacute;mentaire qui coposent la pi&egrave;ce.</p>

	<h2>La barre d&apos;outil Fonctions</h2>
	<img src="/Controleur/Piece/onglet_fonctions.png" width=98% alt="onglet Fonctions">
	<p>C&apos;est le premier onglet de la barre d&apos;outils en haut de l&apos;&eacute;cran.</p>

	<h2>&Agrave; partir d&apos;une esquisse</h2>
	<p>A partir d&apos;une esquisse en 2D, les fonctions volumiques permettent de cr&eacute;er un volume &eacute;l&eacute;mentaire. Il y a trois principales mani&egrave;res de cr&eacute;er ce volume:</p>
	<div>
		<p>Extrusion</p>
		<img src="/Controleur/Piece/extrusion.png" width=25% alt="extrusion">
		<p>On empile des esquisses suivant une certaine hauteur</p>
	</div>
	<div>
		<p>R&eacute;volution</p>
		<img src="/Controleur/Piece/revolution.png" width=25% alt="R&eacute;volution">
		<p>On fait tourner une esquisse autour d&apos;un axe. L&apos;angle est &eacute;gale &agrave; 360 degr&eacute;s pour un tout complet.</p>
	</div>
	<div>
		<p>Balayage</p>
		<img src="/Controleur/Piece/balayage.png" width=25% alt="Balayage;">
		<p>On fait suivre &agrave; l&apos;exsqisse un parcours</p>
	</div>
	<p>Dans un volume d&eacute;j&agrave; cr&eacute;&eacute;, il est possible d&apos;enlever de la mati&egrave;re suivant les m&ecirc;mes principes.</p>

	<h2>Cr&eacute;ation d&apos;un volume &eacute;l&eacute;mentaire par copie</h2>
	<p>Il est possible de cr&eacute;er des volumes par copie. L&apos;original peut &ecirc;tre un volume complexe.</p>
	<div>
		<p>Sym&eacute;trie</p>
		<img src="/Controleur/Piece/symetrie.png" width=25% alt="Sym&eacute;trie">
	</div>
	<div>
		<p>R&eacute;p&eacute;tition lin&eacute;aire</p>
		<img src="/Controleur/Piece/repetition_lin.png" width=25% alt="R&eacute;p&eacute;tition lin&eacute;aire">
	</div>
	<div>
		<p>R&eacute;p&eacute;tition circulaire</p>
		<img src="/Controleur/Piece/repetition_circ.png" width=25% alt="R&eacute;p&eacute;tition circulaire">
	</div>
<?php
$this->scriptSection = ob_get_contents();
ob_end_clean();

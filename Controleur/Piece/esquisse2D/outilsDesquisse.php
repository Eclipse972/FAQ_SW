<?php
ob_start();	// début du code <section>
?>
	<h1>La barre d&apos;outils d&apos;esquisse</h1>
	<p>En g&eacute;n&eacute;ral la barre d'outils se trouve en haut de la zone graphique</p>
	<img src="/Controleur/Piece/esquisse2D/barre.png" alt="exemple d&apos;esquisse">
	<p>Il faut cliquer sur l&apos;onglet <b>Esquisse (deuxi&egrave;me onglet sous la barre)</b> pour y acc&eacute;der.</p>
	<p>Apr&egrave;s l&apos;ic&ocirc;ne cotation intelligente se trouvent les ic&ocirc;nes pour dessiner toute sorte d&apos;entit&eacute;: trait, restanglle, cercle, ... Puis des outils pour manipuler les entit&eacute;s: d&eacute;couper, dupliquer, ...</p>
<?php
$this->scriptSection = ob_get_contents();
ob_end_clean();

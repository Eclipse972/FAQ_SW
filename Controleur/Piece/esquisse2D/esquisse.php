<?php
ob_start();	// début du code <section>
?>
	<h1>Les esquisses</h1>
	<p>Une esquisse est dessin&eacute;e sur un plan avec les outils d&apos;esquisse</p>
	<img src="/Controleur/Piece/esquisse2D/esquisse.png" alt="exemple d&apos;esquisse">
	<p>Une esquisse est un dessin ne contenant que des figures ferm&eacute;es qui ne se croisent pas.</p>
	<p>Elle contient des cotes lin&eacute;aires et angulaires. Elle peut aussi contenir des contraintes g&eacute;om&eacute;triques non visibles sur l&apos;image.</p>
	<p>Elle permet de cr&eacute;er des volumes par extrusion, r&eacute;volution, balayage, ...</p>
<?php
$this->scriptSection = ob_get_contents();
ob_end_clean();

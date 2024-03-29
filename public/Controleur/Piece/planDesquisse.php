<?php
ob_start();	// début du code <section>
?>
	<h1>Le plan d&apos;esquisse</h1>
	<p>Le plan d&apos;esquisse est une surface plane ou un plan sur lequel est dessin&eacute;e une esquisse. Lors d&apos;une extrusion et d&apos;une r&eacute;volution, c&apos;est &agrave partir de ce plan qu&apos;est g&eacute;n&eacute;r&eacute; le volume.</p>
	<p>Prenons un exemple: un axe avec un per&ccedil;age et un lamage</p>
	<?=PEUNC\Page::BaliseImage("Piece/axe.png","exemple",'width="300"')?>
	<h2>le plan d&apos;esquisse est un plan existant</h2>
	<p>Pour créer le premier volume d&apos;une pi&egrave;ce, on utilise un des plans de base (Face, Droite et Dessus). Ici on a utilis&eacute; le plan <b>Face</b></p>
	<?=PEUNC\Page::BaliseImage("Piece/face.png","plan de Face",'width="600"')?>
	<h2>Le plan est cr&eacute;&eacute; par l&apos;utilisateur</h2>
	<p>Pour cr&eacute;er l&apos;esquisse circulaire du lamage, on est oblig&eacute; de cr&eacute;er un nouveau plan. Ici un plan tangent au cylindre a &eacute;t&eacute; cr&eacute;&eacute; par l&apos,utilisateur.</p>
	<?=PEUNC\Page::BaliseImage("Piece/plan.png","plan ajout&eacute;",' width="600"')?>
	<h2>Utiliser une surface plane de la pi&egrave;ce</h2>
	<p>Ici on utilise le fond du lamage comme plan d&apos;esquisse</p>
	<?=PEUNC\Page::BaliseImage("Piece/surface.png","plan de Face",'width="300"')?>
	<p>A venir: changer le plan d&apos;esquisse</p>
<?php
$this->setSection(ob_get_clean());

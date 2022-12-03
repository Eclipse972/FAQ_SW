<?php
ob_start();	// début du code <section>
?>
	<h1>Ins&eacute;rer toutes sortes de vues</h1>
	<p>Sur une mise en plan on peut int&eacute;grer un grand nombre de vues diff&eacute;rentes. Par exemple, le dessin ci-dessous comporte :</p>
	<ul>
	<li>des vues standards</li>
	<li>une vue en coupe</li>
	<li>des d&eacute;tails agrandis</li>
	<li>un &eacute;clat&eacute;</li>
	<li>une nomenclature</li>
	<li>un cartouche</li>
	</ul>
	<?=PEUNC\Page::BaliseImage("MEP/dessin.png",'dessin','width=800px')?>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

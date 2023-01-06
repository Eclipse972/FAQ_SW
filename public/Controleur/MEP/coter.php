<?php
ob_start();	// d&eacute;but du code <section>
?>
	<h1>Coter un dessin</h1>
	<p>La cotation concerne surtout les dessins de d&eacute;finition. C&apos;est &agrave; dire le dessin d'une pi&egrave;ce seule. Si la pi&egrave;ce &agrave; &eacute;t&eacute; r&eacute;alis&eacute;e correctement, elle contient sa cotation.</p>
	<ol>
	<li>dans la barre d&apos;outils cliquez sur l&apos;onglet <b>Annotation</b></li>
	<li>dans la barre d&apos;outils, cliquez sur <b>Objets du modèle</b></li>
	<?=PEUNC\Page::BaliseImage("MEP/objetDuModele.png")?>
	<li>à gauche de l&apos;&eacute;cran apparaîsssent les paramètres. Dans la partie Source/Destination cliquez sur Fonction s&eacute;lectionn&eacute;e (c'est une liste) et remplacer par Modèle entier.</li>
	<?=PEUNC\Page::BaliseImage("MEP/source_modeleEntier.png")?>
	<li>Enfin validez en cliquant sur <?=PEUNC\Page::BaliseImage("validation.png","icocirc:ne d&eacute;pouille",'style="height:30px; vertical-align:middle"')?> en haut à gauche.</li>
	</ol>
	<p><a href=/Animations/coterDessin>Montre moi comment ajouter la cotation d'un pièce sur une mise en plan</a></p>
<?php
$this->setSection(ob_get_clean());

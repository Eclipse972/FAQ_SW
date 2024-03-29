<?php
ob_start();	// début du code <section>
?>
	<h1>Le module mise en plan</h1>
	<p>C&apos;est le module qui permet de r&eacute;aliser des mises en plan (dessins de d&eacute;finition ou dessin d&apos;ensemble)
	destin&eacute;es à &ecirc;tre imprim&eacute;es ou export&eacute;es en PDF pour un envoi &eacute;lectronique par exemple.</p>
	<p>Dans ce module on traite principalement de:</p>
	<ul>
	<li>fond de plan</li>
	<li>vues (standard, perspective, coupe, ...)</li>
	<li>cartouche</li>
	<li>nomenclature</li>
	<li>mise en page</li>
	</ul>
	<p><b>Avant toute chose, il faut que votre pi&egrave;ce/assemblage soit enregist&eacute;.
	Faites le si ce n&apos;est pas encore fait dans votre dossier "Documents/Construction".</b></p>
	<h2>D&eacute;but de proc&eacute;dure</h2>
	<ol>
	<li>dans le bandeau sup&eacute;rieur de SolidWorks, cliquez sur le petit triangle noir à cot&eacute; de l&apos;ic&ocirc;ne nouveau document.
	Le menu ci-dessous appara&icirc;t.
	<br><?=PEUNC\Page::BaliseImage("MEP/menu.png")?></li>
	<li>cliquez sur <b>cr&eacute;er un mise en plan &agrave; partir de la pi&egrave;ce/assemblage</b></li>
	<li>dans le menu &agrave; gauche en haut de cette page, cliquez sur <b>Les fonds de plan</b> pour conna&icirc;tre la suite</li>
	</ol>
<?php
$this->setSection(ob_get_clean());

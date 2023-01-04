<?php
ob_start();	// d&eacute;but du code <section>
?>
	<h1>Les fonds de plan: au del&agrave; d&apos;une simple feuille de papier</h1>
	<p>Lors de la cr&eacute;ation d&apos;une mise en plan la premi&egrave;re op&eacute;ration est de choisir un fond de plan.
	Un fond de plan est une feuille sur laquelle sont dessin&eacute;s une bordure et un cartouche.
	SolidWorks est livr&eacute; avec ses propres fonds de plan mais j&apos;en ai cr&eacute;&eacute; des personalis&eacute;s</p>
	<ol>
	<li>Si ce n&apos;est d&eacute;j&agrave; fait, ouvrez votre pi&egrave;ce.</li>
	<li>dans le bandeau sup&eacute;rieur de SolidWorks, cliquez sur le petit triangle noir &agrave; cot&eacute; de l&apos;ic&ocirc;ne nouveau document. Le menu ci-dessous apparaît.</li>
	<?=PEUNC\Page::BaliseImage("MEP/creerMEP.png")?>
	<li>cliquez sur <b>cr&eacute;ez une mise en plan &agrave; partir de la pi&egrave;ce/assemblage</b>.</li>
	</ol>
	<p>boite de dialogue</p>
	<?=PEUNC\Page::BaliseImage("MEP/boiteMEP.png")?>
	<h2>Acc&eacute;der aux fonds de plan sur le r&eacute;seau du lyc&eacute;e</h2>
	<ol>
	<li>cliquez sur le bouton <b>Parcourir</b> dans la boite de dialogue</li>
	<li>ans la fen&ecirc;tre qui s&apos;ouvre, cliquez sur <b>Ordinateur</b> sous W7 ou <b>Ce PC</b> sous W10</li>
	<li>s&eacute;lectionnez le lecteur r&eacute;seau de votre classe (1-05$ si votre classe est la 1e 5)</li>
	<li>chemin: fiches/Construction/Fonds de plan</li>
	</ol>
	<p>Dans ce dossier se trouve trois fichiers:</p>
	<ul>
	<li>A4H: A4 disposition paysage</li>
	<li>A4V: A4 disposition portait</li>
	<li>A3: A3 disposition paysage</li>
	</ul>
	<p>Ces trois fonds de plan possèdent un cartouche pr&eacute;rempli (titre, &eacute;chelle, date et dessinateur).</p>
<?php
$this->setSection(ob_get_clean());

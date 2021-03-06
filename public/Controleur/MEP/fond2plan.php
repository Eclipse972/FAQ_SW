<?php
ob_start();	// début du code <section>
?>
	<h1>Les fonds de plan: au del&agrave; d&apos;une simple feuille de papier</h1>
	<p>Lors de la cr&eacute;ation d&apos;une mise en plan la premi&egrave;re op&eacute;ration est de choisir un fond de plan.
	Un fond de plan est une feuille sur laquelle sont dessin&eacute;s une bordure et un cartouche.
	SolidWorks est livr&eacute; avec ses propres fonds de plan mais j&apos;en ai cr&eacute;&eacute; des personalis&eacute;s</p>
	<p>boite de dialogue</p>
	<?=\PEUNC\classes\Page::BaliseImage("MEP/boiteMEP.png")?>
	<h2>Acc&eacute;der aux fonds de plan sur le r&eacute;seau du lyc&eacute;e</h2>
	<ol>
	<li>cliquez sur le bouton <b>Parcourir</b> dans la boite de dialogue</li>
	<li>ans la fen&ecirc;tre qui s&apos;ouvre, cliquez sur <b>Ordinateur</b> sous W7 ou <b>Ce PC</b> sous W10</li>
	<li>s&eacute;lectionnez le lecteur réseau de votre classe (1-05$ si votre classe est la 1e 5)</li>
	<li>chemin: fiches/Construction/Fonds de plan</li>
	</ol>
	<p>Dans ce dossier se trouve trois fichiers:</p>
	<ul>
	<li>A4H: A4 disposition paysage</li>
	<li>A4V: A4 disposition portait</li>
	<li>A3: A3 disposition paysage</li>
	</ul>
	<p>Ces trois fonds de plan possèdent un cartouche pr&eacute;rempli (titre, échelle, date et dessinateur).</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

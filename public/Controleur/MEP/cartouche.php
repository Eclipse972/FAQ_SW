<?php
ob_start();	// début du code <section>
?>
	<h1>Remplir le cartouche</h1>
	<p>Le cartouche est la fiche d&apos;identit&eacute; du dessin. Le cartouche par d&eacute;faut que je propose est pr&eacute;rempli.</p>
	<?=PEUNC\Page::BaliseImage("MEP/cartouche.png")?>
	<h2>Acc&eacute;der au cartouche</h2>
	<?=PEUNC\Page::BaliseImage("MEP/acces.png")?>
	<ol>
	<li>faites un clic droit sur Feuille1 dans l'arbre de création à gauche. Un menu contextuel apparaît</li>
	<li>cliquez sur « Éditer le fond de plan ».</li>
	</ol>
	<p>Attention : les vues disparaissent c'est normal.</p>
	<h2>Modifier les champs pré-remplis</h2>
	<ol>
	<li>double-cliquez sur le texte pour le modifier.</li>
	<li>saisissez votre texte</li>
	<li>validez en cliquant &agrave; l&apos;ext&eacute;rieur de la case</li>
	</ol>
	<p>Les cases modifiables sont:</p>
	<ul>
	<li>Le titre</li>
	<li>l&apos;&eacute;chelle</li>
	<li>la date</li>
	<li>le dessinateur</li>
	</ul>
<?php
$this->setSection(ob_get_clean());

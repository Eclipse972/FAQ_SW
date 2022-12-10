<?php
$this->setLogo('caricature.png');// changement de logo de la page
ob_start();	// d&eacute;but du code <section>
?>
	<h1>A propos de moi</h1>
	<p>Je suis professeur de construction dans une SEP. J&apos;interviens en construction dans deux formations: technicien d&apos;usinage et m&eacute;tiers de l’&eacute;lectrotechnique. Et &agrave; mes heures perdues je conçois des sites web.</p>
	<p>Je suis &agrave; la recherche de contributeurs.</p>
	<p>sur le fond</p>
	<ul>
	<li>r&eacute;diger des articles</li>
	<li>corriger les fautes</li>
	<li>ou tout simplement confronter nos points de vues</li>
	</ul>
	<p>sur la forme:<br>
	m&apos;aider pour la programmation car je suis loin d&apos;&ecirc;tre un pro (relecture, nouvelles fonctionalit&eacute;s).
	Mes deux sites reposent sur HTML5, CSS3, PHP et mySQL.</p>
	<p>Pour ceux que ça int&eacute;ressent mes deux sites sont sur github:<br>
	<a href ="https://github.com/Eclipse972/FAQ_SW" target="_blank">ma FAQ sur SolidWorks</a><br>
	<a href ="https://github.com/Eclipse972/Dossiers_Techniques" target="_blank">mes dossiers techniques en ligne</a>
	</p>
	<p>Vous pouvez me contacter via le <a href="/Contact">formulaire de contact.</a><br>
	Ce lien est propos&eacute; dans tous les pieds de page.
	</p>
<?php
$this->setSection(ob_get_clean());

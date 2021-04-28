<?php
ob_start();	// début du code <section>
?>
	<h1>A propos de moi</h1>
	<p>Je suis professeur de construction dans une SEP. J'interviens en construction dans deux formations: technicien d'usinage et métiers de l’électrotechnique. Et à mes heures perdues je conçois des sites web.</p>
	<p>Je suis à la recherche de contributeurs</p>
	<p>sur le fond</p>
	<ul>
	<li>rédiger des articles</li>
	<li>corriger les fautes</li>
	<li>ou tout simplement confronter nos points de vues</li>
	</ul>
	<p>sur la forme:<br>
	m'aider pour la programmation car je suis loin d'être un pro (relecture, nouvelles fonctionalités).
	Mes deux sites reposent sur HTML5, CSS3, PHP et mySQL.</p>
	<p>Pour ceux que ça intéressent mes deux sites sont sur github:<br>
	<a href ="#">ma FAQ sur SolidWorks</a><br>
	<a href ="#">mes dossiers techniques en ligne</a>
	</p>

	<p>Vous pouvez me contacter via le <a href="/Contact">formulaire de contact.</a><br>
	Ce lien est proposé dans tous les pieds de page.
	</p>
<?php
$this->scriptSection = ob_get_contents();
ob_end_clean();

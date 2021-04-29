<?php
ob_start();	// début du code <section>
?>
	<h1>Bienvenue sur mon site !</h1>
	<p>Je d&eacute;veloppe ce site d&apos;abord pour l&apos;exploiter avec mes &eacute;l&egrave;ves mais pas seulement. <br>
	Cette FAQ (Foire Aux Questions) est con&ccedil;ue pour la version 2015 que j&apos;utilise en classe qui soit dit en passant
	est largement suffisante pour l&apos;usage que j&apos;en ai.</p>
	<p>La plupart des astuces sont valables pour votre version de SolidWorks &agrave; un code couleur pr&egrave;s.</p>
	<p>Comment naviguer sur le site?</p>
	<ul>
	<li>En haut: chaque module est accessible depuis un onglet</li>
	<li>&agrave; gauche: les articles avec &eacute;ventuellement des sous-articles</li>
	<li>au centre: l&apos;article (la zone ou vous lisez ce texte)</li>
	<li>&agrave; droite: les articles en lien avec l&apos;article consult&eacute;</li>
	<li>en bas: pied de page avec un lien vers le formulaire de contact.</li>
	</ul>
	<p>Remarques:</p>
	<p>Mon objectif n&apos;est pas de remplacer l&apos;aide en ligne de SolidWorks mais de r&eacute;pondre
	aux questions r&eacute;currentes qui me sont pos&eacute;es en classe. Pour plus de pr&eacute;cisions
	les articles ont un lien vers l&apos;aide de SolidWorks aussi souvent que possible.</p>
	<p>Le site ne comporte pas encore de moteur de recherche mais &ccedil;a viendra peut-&ecirc;tre un jour!</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();

$this->setSection($tampon);

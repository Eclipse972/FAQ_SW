<?php
ob_start();	// d&eacute;but du code <section>
?>
	<h1>Code couleur</h1>
	<p>Lors de la cr&eacute;ation d&apos;une esquisse SolidWorks utilise en code couleur qui renseigne sur l&apos;&eacute;tat de contrainte de l&apos;esquisse</p>
	<ul>
		<li>bleu: esquisse sous-contrainte. On peut bouger des entit&eacute;s</li>
		<li>noir: esquisse totalement contrainte. Pas besoin de cote suppl&eacute;mentaire</li>
		<li>rouge; l&apos;esquisse est sur-contrainte</li>
	</ul>
<?php
$this->setSection(ob_get_clean());

<?php
ob_start();	// début du code <section>
?>
	<h1>Cotation intelligente</h1>
	<p>Cette ic&ocirc;ne permet coter une esquisse. Suivant les entit&eacute;s s&eacute;lectionn&eacute;es SolidWorks est capable de deviner le type de cote.</p>
	<ul>
		<li>Un cercle on obtient son diamètre<br>illustration &agrave; venir</li>
		<li>2 points ou les extr&eacute;mit&eacute;s d&apos;un segment avec d&eacute;placement de la souris horizontalement: cote verticale<br>illustration &agrave; venir</li>
		<li>2 points ou les extr&eacute;mit&eacute;s d&apos;un segment avec d&eacute;placement de la souris verticatement: cote horizontalee<br>illustration &agrave; venir</li>
		<li>2 points ou les extr&eacute;mit&eacute;s d&apos;un segment avec d&eacute;placement de la souris perpendiculairementau segment: cote de disttance entre les points<br>illustration &agrave; venir</li>
		<li>2 segment parall&egrave;lles: la distance entre les segments<br>illustration &agrave; venir</li>
		<li>2 segment non parall&egrave;lles: l&apos;angle entre les segments<br>illustration &agrave; venir</li>
	</ul>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

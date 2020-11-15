<style type="text/css">
#Phase {
	padding:10px;
}

#Phase h2 {
	background-color:yellow;
	text-align:center;
	text-decoration:none;
	padding:10px;
	margin:0;
}
#Phase ol li { margin-bottom:10px; }

.gauche { 
	float:left;
	margin-top:0;
	margin-right:30px
}

</style>

<?php
// $dossierVE est une variable globale à définir avant d'utiliser les fonctions

function Titre($titre, $VE) { // VE et dossierVE ne sont pas forcément identiques.Exemple: tronc de cône et tronc2cone
global $dossierVE;
?>

<h1>Cr&eacute;er <?=$titre?> </h1>
<p>On veut r&eacute;aliser : <img src="Articles/<?=$dossierVE?>/VEcote.png" style="vertical-align:middle; height:300px" alt="<?=$VE?> cot&eacute;"></p>
<?php
}

function PlanDesquisse() {
global $dossierVE;
?>

<div id="Phase">
<h2>Choisir le plan d&apos;esquisse</h2>
<p>choisir un plan d&apos;esquisse (Face, Dessus ou Doite) dans l&apos;arbre de cr&eacute;ation<img src="Vue/images/arbre.png" style="vertical-align:middle" alt="Arbre de cr&eacute;ation vide"></p>
<a href="Vue/planDesquisse.avi">Montre moi</a>
</div>
<?php
}

function EsquisseCotée($icone_principale, $extrusion = true, $icone_secondaire = '') {
global $dossierVE;
?>

<div id="Phase">
<h2>Esquisse cot&eacute;e</h2>
<p>Il faut dessiner :<img src="Articles/<?=$dossierVE?>/esquisse.png" style="vertical-align:middle; height:300px" alt="esquisse cot&eacute;e"></p>
<p>Dans la barre d&apos;outils, cliquez sur l&apos;onglet <b>Esquisse</b> (deuxi&egrave;me onglet) :<img src="Vue/images/outilsEsquisse.png" alt="Barre d&apos;outils Esquisse"></p>
<p>Vous aurez besoin des ic&ocirc;nes:</p>
<ul>
<li>
<?php 
	echo $icone_principale,'<img src="Articles/',$dossierVE,'/icone.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne ',icone_principale,'">';
	if ($icone_secondaire != '')
		echo ' et ',$icone_secondaire,'<img src="Articles/',$dossierVE,'/icone2.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne ',$icone_secondaire,'">';
?>
</li>
<?=$extrusion ? '' : '<li>ligne de construction<img src="Vue/images/ligne2construction.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne ligne de construction"> pour cr&eacute;er l&aos;axe de r&eacute;volution.</li>'?>
<li>cotation intelligente<img src="Vue/images/cotation.png" style="vertical-align:middle" alt="ic&ocirc;ne cotation intelligente">pour coter votre esquisse.</li>
</ul>

<a href="Articles/<?=$dossierVE?>/esquisse.avi">Montre moi</a>
</div>
<?php
}

function MiseEnVolume($extrusion = true, $dépouille =false) {
global $dossierVE;
?>

<div id="Phase">
<h2>Fonction de mise en volume</h2>
<ol>
<li>Dans la barre d&apos;outils, s&eacute;lectionnez l&apos;onglet <b>Fonctions</b> (premier onglet) :<img src="Vue/images/fonctions.png" style="vertical-align:middle" alt="Barre d&apos;outils Fonctions."></li>
<li>Cliquez sur l&apos;ic&ocirc;ne <b><?=$extrusion ? 'Base/Bossage extrud&eacute;' : 'Base bossage avec r&eacute;volution'?></b>
<img src="Vue/images/<?=$extrusion ? 'extrusion' : 'revolution'?>.png" style="height:30px; vertical-align:middle" alt="ic&ocirc;ne de mise en volume">
<?=$extrusion ? ' premi&egrave;re' : ' deuxi&egrave;me'?> ic&ocirc;ne.</li>

<p class="gauche"><img src="Vue/images/param_<?=$extrusion ? 'extrusion' : 'revolution'?>.png" alt="param&egrave;tres"></p>
<li style="margin-top:50px">A gauche de l&apos;&eacute;cran apparaissent les param&egrave;tres</li>
<li><?=$extrusion ? 'Dans la partie <b>Direction 1</b>, inscrivez la profondeur ici 70 mm' : 'Si la case <b>Axe de r&eacute;volution</b> n&apos;est renseign&eacute;e (ici ligne5) il faut sélectionner l&apos;axe de r&eacute;volution'?>.</li>
<?php if (($extrusion) && ($dépouille))
	echo '<li>Cliquez sur l&apos;ic&ocirc;ne d&eacute;pouille <img src="Vue/images/depouille.png" style="height:30px; vertical-align:middle" alt="icocirc:ne d&eacute;pouille"> puis entrez l&apos;angle en degr&eacute;s.</li>';
?>
<li>Enfin validez en cliquant sur <img src="Vue/images/validation.png" style="height:30px; vertical-align:middle" alt="icocirc:ne d&eacute;pouille"> en haut à gauche.</li>
</ol>
<a href="Articles/<?=$dossierVE?>/miseEnVolume.avi">Montre moi</a>
</div>
<?php
}

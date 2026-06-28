<?php
ob_start();	// début du code <section>
?>
	<h1>Retrouver un article sans moteur de recherche</h1>
	<p>Le site ne comporte pas encore de moteur de recherche mais j&apos;y travaille!</p>
	<p>En attendant voici une liste de tous les articles. </p>
	<p>Vous pouvez rechercher des mots cl&eacute;s sur la page a l&apos;aide de la fonction de recherche de votre navigateur.</p>
	<p>Liste &agrave; venir ...</p>
	<p>Proc&eacute;dure de recherche avec Chrome ou Firefox</p>
	<ul>
	<li>presser Ctrl+F</li>
	<li>taper le mot cl&eacute; puis la touche entr&eacute;e</li>
	<li>il y a en g&eacute;n&eacute;ral des fl&egrave;ches pour aller aux mots suivant et pr&eacute;c&eacute;dent</li>
	</ul>
	<p>Les autres navigateurs doivent fonctionner de mani&egrave;re similaire.</p>
<?php
$this->setSection(ob_get_clean());

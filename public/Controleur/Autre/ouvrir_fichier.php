<?php
ob_start();	// début du code <section>
?>
	<h1>Ouvrir efficacement un fichier</h1>
	<p>Un projet peut contenir un nombre &eacute;lev&eacute; de fichiers. Un moyen de s&apos;en sortir est de filtrer la liste de fichiers.</p>
	<ol>
		<li>cliquez dans le menu "Fichier/Ouvrir" ou sur l&apos;ic&ocirc;ne ouvrir <b>icone à venir</b>
			<br><b>image de la boite de dialogue à venir</b></li>
		<li>Dans la oite de dialogue en bas à droite sékection le type de fichier: Pi&egrave;ce pour ne s&eacute;lectionner que les pi&egrave;ces.</li>
		<li>La liste des fichiers diminue dans la zone. S&eacute;lectionnez le fichier puis cliquez sur le bouton ouvrir.
			<br>Remarque:<br>Pour allez plus vite on peut double-cliquer sur le fichier</li>
		<li>La boite de dialogue suivante peut appara&icirc;tre image à venir. Dans ce cas cliquez sur le bouton "ouvrir en lecture seule".</li>
	</ol>
	<p><a href=/Animations/ouvrirFichier>Montre moi comment ouvrir un fichier</a></p>
<?php
$this->setSection(ob_get_clean());

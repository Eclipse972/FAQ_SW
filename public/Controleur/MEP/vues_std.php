<?php
ob_start();	// début du code <section>
?>
	<h1>Ins&eacute;rer les vues standard</h1>
	<p>Il est possible d&apos;ins&eacute;rer 9 vues standard. Les vues de face (ici au centre), droite, gauche, dessus et dessous + 4 persectives.</p>
	<?=\PEUNC\classes\Page::BaliseImage("MEP/9vues.png","9 vues",'width=800px')?>
	<h2>Ins&eacute;rer la vue principale</h2>
	<p>La vue principale est celle qui sera utilis&eacute;e comme vue de face sur la mise en plan. Pour cela il suffit de faire un glisser-d&eacute;poser de la palette de vues vers la feuille.</p>
	<?=\PEUNC\classes\Page::BaliseImage("MEP/vue_principale.png","vue principale + palette de vues",'width=800px')?>
	<p>Remarque: la vue de face de la mise en plan n&apos;est pas forc&eacute;ment celle de la pi&egrave;ce ou de l&apos;assemblage</p>
	<h2>Ins&eacute;rer les autres vues</h2>
	<p>Il suffit de d&eacute;placer la souris pour voir les autres vues. Puis cliquez si vous voulez garder la vue.</p>
	<?=\PEUNC\classes\Page::BaliseImage("MEP/autres_vues.png","les autres vues",' width=400px')?>
	<p>Ici une vue de gauche, une perspective et une vue de dessus. L&apos;alignement est mat&eacute;rialis&eacute; par un trait double mixte</p>
	<p>Enfin valider en cliquant sur le coche vert en haut &agrave; droite, en haut &agrave; gauche de l&apos;&eacute;cran ou un clic droit de la souris.</p>
	<h2>Supprimer une vue</h2>
	<p>Si une vue ne convient pas il suffit de faire un clic droit dessus et s&eacute;lectionner Effacer/suppr dans le menu contextuel. Une confrmation est deman&eacute;e avant la suppresion.</p>
	<?=\PEUNC\classes\Page::BaliseImage("MEP/menu_contextuel.png","extrait du menu contextuel pour suppression",'width=300px')?>
	<p>Moyen plus rapide: cliquer dessus et presser la touche supprimer du clavier</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

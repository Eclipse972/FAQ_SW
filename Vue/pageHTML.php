<main role="main"> <!--remarque: <main> suffit à Chrome pour tenir compte de la feuille de style.-->
<nav>
<?php	
	$etat = unserialize($_SESSION['état']);
	echo $etat->Generer_menu();
?>
</nav>

<section>
<h1>Titre de l&apos;article</h1>
<p>Corps de la page</p>
</section>

<aside>
<h1>Articles connexes</h1>
<ul>
<li><a href="#">article 1</a></li>
<li><a href="#">article 2</a></li>
<li><a href="#">article 3</a></li>
</ul>
</aside>

</main>

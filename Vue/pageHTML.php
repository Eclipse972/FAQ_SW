<main role="main"> <!--remarque: <main> suffit à Chrome pour tenir compte de la feuille de style.-->
<nav>
<?php echo $etat->Generer_menu();?>
</nav>

<section>
<h1><?php echo $etat->Generer_titre();?></h1>
<?php include $etat->Generer_page();?>
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

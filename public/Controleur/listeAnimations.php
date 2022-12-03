<?php
ob_start();
?>
<h1>Liste des animations</h1>
<p>Dans le menu donne la liste des animations disponibles.</p>
<p>Les onglets restent disponibles</p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();
$this->setView("doctype.html");

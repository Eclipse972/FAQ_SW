<?php // Controleur FAQ
function Configurer() {
//$BD = new base2donnees();
list($onglet, $item, $sous_item) = Lire_parametre(); // ATTENTION: numéro de page non pris en compte

	/////////////////////////////////////
	echo "> {$onglet} - {$item} - {$sous_item} <\n";

$etat = new Position($onglet, $item, $sous_item);
$_SESSION['état'] = serialize($etat); // stockage dans la session

return [
	'css'		=> 'FAQ'
];
}

<?php // Controleur FAQ
function Configurer() {
//$BD = new base2donnees();
list($onglet, $item, $sous_item) = Lire_parametre("p");
$Etat = new Position($onglet, $item, $sous_item);
$_SESSION['état'] = serialize($Etat); // stockage dans la session

return [
	'css'		=> 'FAQ',
	'onglets'	=> $Etat->Generer_Code_onglets()
];
}

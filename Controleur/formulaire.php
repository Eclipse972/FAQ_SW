<?php // controleur du formulaire de la FAQ SW
include 'contexte.php';

function Configurer() { // détermine l'objet par défaut du message du formulaire
$BD = new base2donnees();
$valideur = new Valideur();
$_SESSION['validation'] = serialize($valideur);
$_SESSION['temps'] = time();

return ['css'	=> 'style_page',
		'onglets' => '',
		'titre'	=> 'Formulaire de contact',
		'page'	=> 'formulaire',
		'objet' => 'Exemple: &agrave; propos de '.Contexte()];
}

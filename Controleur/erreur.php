<?php // controleur erreur
function Configurer() {
$code = (int) $_GET['erreur'];
switch ($code) { // voir .htaccess
case 0:
	$message = 'Un probl&egrave;me est survenu lors de l&apos;envoi de votre message'."\n".'R&eacute;essayez plus tard!';
	break;
case 403:
	$message = 'Acc&egrave;s interdit';
	break;
case 404:
	$message = 'Cette page n&apos;existe pas';
	break;
case 500:
	$message = 'Serveur satur&eacute;: essayez de recharger la page';
	break;
default:
	$message = 'Erreur inconnue';
	$code = '';
}
return ['css'	=> 'style_page',
		'onglets' => '',
		'titre'	=> 'Erreur '.$code,
		'page'	=> 'erreur',
		'message' => $message];
}

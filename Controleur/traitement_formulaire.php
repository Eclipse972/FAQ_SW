<?php
session_start();
// ce script est exécuté independament de index.php donc il faut inclure les classes utiles
include "liens.php";
include "contexte.php";
include "../Modele/classe_support.php";
include "../Modele/classe_valideur.php";
include "../Modele/classe_BD.php";

function Récupérer_paramètres() { // reccueillir les données brutes et les filtrer
$T_réponse = null;
$spam_détecté = false;
if (!empty($_POST))
	foreach ($_POST as $clé => $valeur) // examen du tableau $_POST
		if (in_array($clé, array('nom', 'courriel', 'objet', 'message', 'code', 'age'))) // clé autorisée ?
			$T_réponse[$clé] = strip_tags($valeur); // on nettoie la valeur
		else { // clé inconnue
			$spam_détecté = true;
			exit;
		}

// tentative de détournement du formulaire ou temps de remplissage trop court
if (($spam_détecté) || (time() - $_SESSION['temps'] < 8)) {
	// stockage des infos sur le visiteur
	// envoi d'un email d'alerte
	return; // sortie immédiate de la fonction sans renvoyer de résultat
} else {	
	if (strlen($T_réponse['nom']) > 1) // le nom doit comporter deux caractères à cause du code de validation
		$_SESSION['nom'] = $T_réponse['nom']; // mémorisation du nom

	if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $T_réponse['courriel']))
		$_SESSION['courriel'] = $T_réponse['courriel']; // mémorisation du courriel

	return [$T_réponse['objet'], $T_réponse['message'], $T_réponse['code']]; 
}
}

function Envoyer_message($objet, $message) { // voir la fonction mailFree() dans test-mail.php situé à la racine
	$additional_headers  = 'From: formulaire<dossiers.techniques@free.fr>'."\r\n";
	$additional_headers .= "MIME-Version: 1.0\r\n";
	$additional_headers .= "Content-Type: text/plain; charset=utf-8\r\n";
	$additional_headers .= "Reply-To: ".$_SESSION['courriel']."\r\n";

	$message .= "\n".'------------------------------- contexte -----------------------------------'.
				"\n".html_entity_decode(Contexte('../')); // rajout du contexte lors de l'appel du formulaire

	$start_time = time();
	$resultat=mail ('christophe.hervi@gmail.com' , $objet, $message, $additional_headers);
	$time= time()-$start_time;
	return $resultat & ($time>1);
}

list($objet, $message, $code) = Récupérer_paramètres();

$validation = unserialize($_SESSION['validation']);

if ((isset($_SESSION['nom'])) && 
	(isset($_SESSION['courriel'])) && 
	(strlen($objet) > 1) && 
	(strlen($message) > 1) && 
	$validation->OK($objet, $message, $code))
{	// enregistrement du message
	if (Envoyer_message($objet, $message))
			$parametre = Parametres_support_courant();	// retour sur la page précédant le formulaire
	else	$parametre = "?erreur=0";					// problème avec l'envoi du mail
} else		$parametre = "index.php?f=1";				// retour au formulaire

header("Location: http://dossiers.techniques.free.fr/".$parametre);
exit;

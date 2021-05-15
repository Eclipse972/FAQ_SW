<?php // script issu de mon site dossiers.techiques.free.fr
class Formulaire {
// -----------------------------------------------------------------------------------------------
// Variables
// -----------------------------------------------------------------------------------------------

// les réponses du formulaire
private $nom;
private $courriel;
private $objet;
private $message;
private $code;
// erreurs sur les champs
private $Erreur_nom;
private $Erreur_courriel;
private $Erreur_objet;
private $Erreur_message;


private $lien; // où aller après validation
private $spam_détecté; // tentative de spam détectée
/*
 * Le code de validation est un mot de 5 caractères composé d'une lettre de chaque champ (soit 4 lettres).
 * Pour le choix du caractère il y a quatre possibilités: premier, deuxième, avant dernier et dernier
 * la dernière lettre est une des 4 premières du code.
 *
 * Exemple de validation:
 * 	deuxième caractère de l'objet
 * 	avant dernier caractère du message
 *  deuxième caractère de votre courriel
 *  dernier caractère de votre nom
 *  quatrième caractère de ce code de validation
 * Si les champs sont :
 * 		nom =  Eclipse972
 * 		courriel = christophe.hervi@free.fr
 * 		objet = Question
 * 		message = Pourquoi un code si compliqué?
 * Le code de validation sera uéh22
*/

// variables nécessaires à la création du code de validation
private $T_id_champ;	// tableau contenant les numéros de champ
private $T_choix;		// tableau contenant les positions demandées
private $dernier_choix; // dernière instruction: position du caractère du code de validation
private $top_départ;	// moment où est affiché le formulaire

// Méthodes ---------------------------------------------------------------------------------------
public function __construct() {
	// pour l'affichage du formuaire
	$this->Erreur_nom = $this->Erreur_courriel = $this->Erreur_objet = $this->Erreur_message = false;
	$this->SetLien($_SERVER['HTTP_REFERER']);
}

public function RAZ() { // le formulaire est appelé une nouvelle fois
	//$this->Erreur_nom = $this->Erreur_courriel = $this->Erreur_objet = $this->Erreur_message = false;
	if ($_SERVER['HTTP_REFERER'] != 'http://dossiers.techniques.free.fr/formulaire.php') // pageprécédente = formulaire suite à une erreur
		$this->SetLien($_SERVER['HTTP_REFERER']);
	else
		$this->message = ''; // nom et courriel sont conservés
}

// Mutateurs --------------------------------------------------------------------------------------
private function SetCommun($variable, $valeur, $courriel = false) {
	$valeur	= strip_tags($valeur);
	$test = (	!$courriel && (strlen($valeur) > 1)) // la variable doit avoir au moins deux caractères si ce n'est pas un courriel
		||		($courriel && (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $valeur)));
	$this->$variable = ($test) ? $valeur : '';
	$variable = 'Erreur_'.$variable;// nom de l'erreur associée
	$this->$variable = (!$test);	// l'erreur est mémorisée
}
private function SetNom($valeur)		{ $this->SetCommun('nom', $valeur); }
private function SetObjet($valeur)		{ $this->SetCommun('objet',$valeur); }
private function SetMessage($valeur)	{ $this->SetCommun('message',$valeur); }
private function SetCourriel($valeur)	{ $this->SetCommun('courriel',$valeur,true); }

private function SetCode($valeur) {
	$this->code	= strip_tags($valeur);
}
private function SetLien($URL) { // il faut l'URL complète. Ex: http://dossiers.techniques.free.fr/script.php
	$this->lien = substr($URL,35); // que le nom du script avec ses éventuels paramètres
}
// fin des mutateurs -----------------------------------------------------------------------------

private function Objet_prédéfini() { // génère un objet prédéfini en fonction de la page qui appelle le formulaire
	switch($this->lien) { // le lien daoit être initialisé avant de lancer cette fonction
		case 'index.php':
			$this->objet = '&agrave; propos de la page d&apos;index';
			break;
		case 'a_propos.php':
			$this->objet = '&agrave; propos de l&apos;archive '.$_SESSION['support']->Du_support();
			break;
		default:
			if (substr($this->lien,0,10) == 'pageDT.php') {
				$BD = new base2donnees;
				$this->objet = '&agrave; propos page &laquo;'.$BD->Texte_item().'&raquo; '.$_SESSION['support']->Du_support();
			} else $this->objet = '';
	}
}

private function Générer_code_validation() {
	for($i=0; $i<4; $i++) {				// numéro de l'instruction
		$this->T_id_champ[$i] = $i;		// numéro du champ
		$this->T_choix[$i] = rand(0,3);	// choix du caractère
	}
	shuffle($this->T_id_champ);			// on mélange l'ordre des champs
	$this->dernier_choix = rand(0,3);	// choix du dernier caractère
}

public function Afficher() {
	$this->Générer_code_validation();	// on génère un nouveau code
	$this->Objet_prédéfini();			// défini la proposition d'objet en fonction du contexte
?>	<form method="post" action="Controleur/traitement_formulaire.php" id=formulaire>
		<p><?php if ($this->Erreur_nom) echo 'Le nom doit comporter au moins deux lettres<br>';?>
			Nom : <input 	 type="text" name="nom"	value="<?=$this->nom?>" /></p>

		<p><?php if ($this->Erreur_courriel) echo 'adresse mail incorrecte<br>';?>
			Courriel : <input type="text" name="courriel" value="<?=$this->courriel?>" /></p>

		<p><?php if ($this->Erreur_objet) echo 'L&apos;objet doit comporter au moins deux caract&egrave;res<br>';?>
			Objet : <input	 type="text" name="objet"	placeholder="<?=$this->objet?>" /></p>

		<p><?php if ($this->Erreur_message) echo 'Le message doit comporter au moins deux caract&egrave;res<br>';?>
			Message : <textarea name="message" rows="6"></textarea></p>

		<div id=validation>
			<p>Validation du formulaire</p>
			<ul>
			<?php $this->Afficher_validation();?>
			</ul>
			<p>Code	<input type="text" name="code" style="width:100px;" /></p>
		</div>
		<p style="text-align:center;">
			<input type="submit" value="Envoyer" style="width:100px; margin-right:200px" />
			<a href="<?=$this->lien?>">Page pr&eacute;c&eacute;dente</a>
		</p>
	</form>
<?php
	$this->top_départ = time();
	$this->Erreur_nom = $this->Erreur_courriel = $this->Erreur_objet = $this->Erreur_message = false;
}

private function Afficher_validation() { // affiche les instructions du code de validation
	$champs		= array('de votre nom', 'de votre courriel', 'de l&apos;objet', 'du message');
	$position	= array('premier', 'deuxi&egrave;me', 'avant dernier', 'dernier'); // => il faut au moins deux caratères pour le champ
	for($i=0; $i<4; $i++) { // affichage i-ème instruction
		echo "\t\t\t", '<li>', $position[$this->T_choix[$i]], ' caract&egrave;re ', $champs[$this->T_id_champ[$i]], '</li>', "\n";
	}
	$position = array('premier', 'deuxi&egrave;me', 'troisi&egrave;me', 'quatri&egrave;me');
	echo "\t\t\t", '<li>', $position[$this->dernier_choix], ' caract&egrave;re de ce code de validation</li>', "\n";
}

private function OK() { // code donné par le visiteur est bon?
	if (($this->spam_détecté)				// spam détecté
	|| (time() - $this->top_départ < 8))	// si le temps de remplissage < 8s => pas un humain
		return false;

	$champs	= array('nom', 'courriel', 'objet', 'message');
	$réponse = array(
		'nom'		=> $this->nom,
		'courriel'	=> $this->courriel,
		'objet'		=> $this->objet,
		'message'	=> $this->message);
	$position = array(0, 1, -2, -1);

	$code = ''; // construction du code à trouver issu des instructions.
	for($i=0; $i<4; $i++) { // i-ème instruction
		$code .= substr($réponse[$champs[$this->T_id_champ[$i]]] ,$position[$this->T_choix[$i]], 1);
	}
	$code .= substr($code, $this->dernier_choix, 1); // dernier caractère
	return ($this->code == $code);
}

public function Récupérer_données() { // reccueillir les données brutes, les filtrer et les stocker
	$this->spam_détecté = false;
	$Mutateur = array(
		'nom'		=> 'SetNom',
		'courriel'	=> 'SetCourriel',
		'objet'		=> 'SetObjet',
		'message'	=> 'SetMessage',
		'code'		=> 'SetCode');
	if (!empty($_POST))
		foreach ($_POST as $clé => $valeur) // examen du tableau $_POST
			if (in_array($clé, array('nom', 'courriel', 'objet', 'message', 'code'))) // clé autorisée ?
				$this->$Mutateur[$clé]($valeur); // on stocke la valeur
			else { // clé inconnue
				$this->spam_détecté = true;
				exit;
			}
}

private function Envoyer_message() { // voir la fonction mailFree() dans test-mail.php situé à la racine
	$additional_headers  = 'From: Formulaire DT <dossiers.techniques@free.fr>'."\r\n";
	$additional_headers .= "MIME-Version: 1.0\r\n";
	$additional_headers .= "Content-Type: text/plain; charset=utf-8\r\n";
	$additional_headers .= "Reply-To: ".$this->nom." <".$this->courriel.">\r\n";
	$start_time = time();
	$resultat=mail('christophe.hervi@gmail.com', $this->objet, $this->message, $additional_headers);
	$time= time()-$start_time;
	return $resultat & ($time>1);
}

public function Traitement() {
	$this->Récupérer_données();

	if ($this->OK()) // remplissage du formulaire validé?
		if ($this->Envoyer_message())	// on essaie d'envoyer le message
			$suite = $this->lien;
		else {
			$_SESSION['erreur'] = 0;
			$suite = 'erreur.php';
		}
	else	$suite = 'formulaire.php';
	return $suite;
}
}

<?php
class base2donnees extends BDD_PEUNC {
public function PagesConnexes() {
	$this->Requete('SELECT URL FROM Vue_pagesConnexes WHERE alpha= ? AND beta= ? AND gamma= ?', [$_SESSION['alpha'], $_SESSION['beta'], $_SESSION['gamma']]);
	$reponse = $this->resultat->fetchAll();
	$this->Fermer();
	return $reponse;
}

public function DossierArticle() {
	$this->Requete('SELECT * FROM Vue_articleMenu WHERE alpha= ? AND beta= ? AND gamma= ?', [$_SESSION['alpha'], $_SESSION['beta'], $_SESSION['gamma']]);
	$reponse = $this->resultat->fetch();
	$this->Fermer();
	return $reponse['dossier'];
}

}

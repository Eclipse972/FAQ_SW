<?php
require 'PEUNC/classes/Contact.php';

class PageContact extends Page {
	protected $OContact;

	public function __construct() {
		parent::__construct();
		$this->OContact = new \PEUNC\classes\Contact;	// héritage multiple impossible en PHP
	}

	public function __call($methode,$argument)	{		// permet l'accès aux méthodeS de La classe Erreur de PEUNC
		return $this->OContact->$methode($argument[0]);	// il n'y a au plus qu'un seul paramètre
	}
}

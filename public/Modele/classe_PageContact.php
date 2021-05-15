<?php
require 'PEUNC/classes/Contact.php';

class PageContact extends Page {
	protected $OContact;

	public function __construct() {
		parent::__construct();
		$this->OContact = new \PEUNC\classes\Contact;	// héritage multiple impossible en PHP
	}

	public function Afficher_validation()	{
		$this->OContact->Afficher_validation();
	}

}

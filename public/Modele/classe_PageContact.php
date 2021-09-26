<?php
require 'PEUNC/classes/Contact.php';

class PageContact extends \PEUNC\classes\Contact	{
	protected $OContact;

	public function __construct() {
		parent::__construct();
		$this->setTitle("La Foire Aux Questions sur SolidWorks de ChristopHe");
		$this->setHeaderText("<p class=\"font-effect-outline\">Foire Aux Questions SolidWorks de ChristopHe</p>");
		$this->setLogo("logo.png");
		$this->setFooter("");
	}
}

<?php
require_once 'controller/controllerHome.php';
require_once 'view/view.php';

class Router {

	private $ctrlHome;

	public function __construct() {
		$this->ctrlHome = new HomeController();
	}

	public function routerRequest() {
		$this->ctrlHome->home();
	}

}

?>
<?php

require 'model/account.php';
require 'model/server.php';
require 'view/view.php';

class HomeController {
	
	private $_account;
	private $_server;

	public function __construct() {
		$this->_account = new Account();
		$this->_server = new Server();
	}

	public function home($id = -1) {
		$detailAcc = $this->_account->getAccount($id);
		$detailServ = $this->_server->getServer();
		$view = new View("Home");
		$view->generate(array('account' => $account, 'server' => $server));
	}
}

?>
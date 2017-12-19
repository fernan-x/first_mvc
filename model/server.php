<?php

require_once 'model/model.php';

class Server extends Model {

	public function getServer() {
		$query = 'SELECT * FROM server';
		$res = $this->executeQuery($query);
		return $res;
	}

}

?>
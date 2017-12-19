<?php

require_once 'model/model.php';

class Account extends Model {

	public function getAccount($id) {
		$query = 'SELECT * FROM account WHERE id=?';
		$res = $this->executeQuery($query, array($id));
		return $res;
	}

}

?>
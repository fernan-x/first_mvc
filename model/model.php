<?php

abstract class Model {
	private $_db;

	protected function executeQuery($query, $params = null) {
		if ($params == null)
			$res = $this->getDb()->query($query);
		else {
			$res = $this->getDb()->prepare($query);
			$res->execute($params);
		}
		return $res;
	}

	private function getDb() {
		if ($this->db == null)
			$this->db = new PDO('mysql:host=localhost;dbname=flyffsite;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $this->db;
	}
}

?>
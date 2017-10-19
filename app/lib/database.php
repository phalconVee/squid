<?php

/**
 * 
 */
class Database extends PDO {
	
	public function __construct() {
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
	}
	public function insert($table, $data, $redirect){
		ksort($data);
		$field_name = implode('`, `', array_keys($data));
		$field_value = ':'.implode(',:', array_keys($data));
		$query = $this->prepare("INSERT INTO $table(`$field_name`)VALUES($field_value)");
		foreach ($data as $key => $value) {
			$query->bindValue(":$key", $value);
		}
		$query->execute();
		if($query){
			header('location:'.URL.$redirect);
			exit;
		}
	}
	public function select($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC){
		$query = $this->prepare($query_statement);
		foreach ($array as $key => $value) {
			$query->bindValue("$key", $value);
		}
		$query->execute();
		return $query->fetchAll($fetch_mode);
	}
	public function select_by_id($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC){
		$query = $this->prepare($query_statement);
		foreach ($array as $key => $value) {
			$query->bindValue("$key", $value);
		}
		$query->execute();
		return $query->fetch($fetch_mode);
	}
	public function update($table, $data, $where, $redirect){
		ksort($data);
		$field_details = null;
		foreach ($data as $key => $value) {
			$field_details .= "`$key`=:$key,";
		}
		$field_details = rtrim($field_details, ',');
		$query = $this->prepare("UPDATE $table SET $field_details WHERE $where");
		foreach ($data as $key => $value) {
			$query->bindValue(":$key", $value);
		}
		$query->execute();
		if($query){
			header('location:'.URL.$redirect);
			exit;
		}
	}
	public function delete($table, $where, $redirect, $limit = 1){
		$query = $this->prepare("DELETE FROM $table WHERE $where LIMIT $limit");
		$query->execute();
		if($query){
			header('location:'.URL.$redirect);
			exit;
		}
	}
	
}


?>
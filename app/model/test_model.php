<?php
/**insert($table, $data, $redirect)
 * select($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * select_by_id($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * update($table, $data, $where, $redirect)
 * delete($table, $where, $redirect, $limit = 1)
 *
 */
class Test_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	function aj_insert_db(){
		$query_statement = "INSERT INTO post(article)VALUES(:aj_text)";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query->execute(array(':aj_text' => $_POST['aj_text']));
		$data = array('article' => $_POST['aj_text'], 'id' => $this->mvc_dbase->lastInsertId());
		echo json_encode($data);
	}
	function  aj_read_db(){
		$query_statement = "SELECT * FROM post";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$query->execute();
		$data = $query->fetchAll();
		echo json_encode($data);
		
	}
	function aj_delete_db(){
		$query_statement = "DELETE FROM post WHERE post_id = :id";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query->execute(array(':id' => $_POST['id']));
	} 
}

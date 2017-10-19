<?php
/**insert($table, $data, $redirect)
 * select($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * select_by_id($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * update($table, $data, $where, $redirect)
 * delete($table, $where, $redirect, $limit = 1)
 *
 */class About_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	function message(){
		return $welcome_message = 'this is a test message';
	}
}

<?php
/**insert($table, $data, $redirect)
 * select($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * select_by_id($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * update($table, $data, $where, $redirect)
 * delete($table, $where, $redirect, $limit = 1)
 *
 */
class Note_model extends Model {

	function __construct() {
		parent::__construct();
	}
	function create_db(){
		//$this->form->mysql_prep(array($_POST['u_login'], $_POST['u_password']));
		$post_data = array(
					'title' => $_POST['note_title'], 
					'content' => $_POST['note_content'], 
					'author' => $_SESSION['author'],
					'author_id' => $_SESSION['author_id'],
					'date_created' => date('Y-m-d H:i:s')
		);
		$query = $this->mvc_dbase->insert('noteq', $post_data, 'note');
	}
	function read_db(){
		return $this->mvc_dbase->select("SELECT * FROM noteq WHERE author_id = {$_SESSION['author_id']}");
	}
	function read_db_by_id(){
		return $this->mvc_dbase->select_by_id("SELECT * FROM noteq WHERE author_id = {$_SESSION['author_id']} AND note_id = :id", array('id' => $_GET['e_id']));
	}
	function update_db(){
		$post_data = array(
					'title' => $_POST['note_title'],
					'content' => $_POST['note_content'],
					'last_updated' =>date('Y-m-d H:i:s')
		);
		$this->mvc_dbase->update('noteq', $post_data, "`note_id` = {$_GET['edit_id']}", 'note');
	}
	function delete_db(){
		$this->mvc_dbase->delete('noteq', "`note_id` = {$_GET['d_id']}", 'note');
	}
}

<?php
/**insert($table, $data, $redirect)
 * select($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * select_by_id($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * update($table, $data, $where, $redirect)
 * delete($table, $where, $redirect, $limit = 1)
 *
 */
class User_model extends Model {
	
	function __construct() {
		parent::__construct();
		Session::init_session();
		$this->author_id = Session::get_session_data('author_id');
	}
	function count_post_for_user(){
		$query = $this->squid_dbase->prepare("SELECT * FROM squid_post WHERE author_id = :author_id");
		$query -> execute(array(':author_id' => $this->author_id));
		return $query->rowCount();
	}
/*	function create_db(){
		$query_statement = "INSERT INTO user(u_login, u_password, role)VALUES(:u_login, :u_password, :role)";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query_set = $query->execute(array(
					':u_login' => $_POST['u_login'], 
					':u_password' => Hash::create('md5', $_POST['u_password'], HASH_KEY), 
					':role' => $_POST['u_role']
		));
		if($query_set){
			header('location:'.URL.'user');
			exit;
		}
	}
	function read_all_user_and_post(){
		$query_statement = "SELECT squid_post.author_id, squid_author.id, squid_author.display_name, squid_author.email, squid_author.date_joined, squid_author.role
							FROM squid_author LEFT JOIN squid_post ON squid_post.author_id = squid_author.id";
		$query = $this->squid_dbase->prepare($query_statement);
		$query->execute();
		return $query->fetchAll();
	}*/
	function read_all_user(){
		return $this->squid_dbase->select("SELECT id, display_name, email, date_joined, role, post_count FROM squid_author");
	}
	/*function read_db_by_id(){
		$query_statement = "SELECT id, u_login, role FROM user WHERE id = :id";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query->execute(array(':id' => $_GET['e_id']));
		return $query->fetch();
	}*/
	function read_selected_user(){
		return $this->squid_dbase->select_by_id("SELECT * FROM squid_author WHERE id = :id", array('id' => $_GET['ue_id']));
	}
	/*function update_db(){
		$query_statement = "UPDATE user SET u_login = :u_login, role = :role WHERE id = :id";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query_set = $query->execute(array(
					':u_login' => $_POST['u_login'],
					':role' => $_POST['u_role'], 
					':id' => $_GET['edit_id']
		));
		if($query_set){
			header('location:'.URL.'user');
			exit;
		}*/
	function save_new_user(){
		//$this->form->mysql_prep(array($_POST['u_login'], $_POST['u_password']));
		$post_data = array(
					'username' => $_POST['u_username'],
					'display_name' => $_POST['u_displayname'],
					'password' => Hash::create('md5', $_POST['u_password'], HASH_KEY), 
					'role' => $_POST['u_role'],
					'date_joined' => date('D d F Y')
					//'time_joined' => time()
					
		);
		$query = $this->squid_dbase->insert('squid_author', $post_data, 'user');
	}
	function save_edit_user(){
		
		$post_data = array(
					'username' => $_POST['u_username'],
					'display_name' => $_POST['u_displayname'],
					(empty($_POST['u_password'])) ? null : 'password' =>  Hash::create('md5', $_POST['u_password'], HASH_KEY),
					'role' => $_POST['u_role']
					
		);
		$this->squid_dbase->update('squid_author', $post_data, "`id` = {$_GET['e_id']}", 'user');
	}
	function save_user_account(){
			$post_data = array(
						'display_name' => $_POST['u_displayname'],
						'email' => $_POST['u_email'],
						'firstname' => $_POST['u_firstname'], 
						'lastname' => $_POST['u_lastname'],
						'website' => $_POST['u_website'],
						'bio' => $_POST['u_bio']
						
			);
			$this->squid_dbase->update('squid_author', $post_data, "`id` = {$_GET['e_id']}", 'user');
		}
	/*function delete_db(){
		$query_statement = "SELECT role FROM user WHERE id = :id";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query->execute(array(':id' => $_GET['d_id']));
		$data = $query->fetch();
		if($data['role'] == 'owner'){ return FALSE;}
		
		$query_statement = "DELETE FROM user WHERE id = :id";
		$query = $this->mvc_dbase->prepare($query_statement);
		$query_set = $query->execute(array( ':id' => $_GET['d_id']));
		 */
	//}
	function delete_selected_post(){
		$data = $this->squid_dbase->select("SELECT role FROM squid_author WHERE id = :id", array('id' => $_GET['ud_id']));
		if($data[0]['role'] == 'administrator') {
			header('location:'.URL.'user');
			exit;	
			return FALSE;
		
		};
		
		$this->squid_dbase->delete('squid_author', "`id` = {$_GET['ud_id']}", 'user');
	}
}
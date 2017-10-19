<?php
/**insert($table, $data, $redirect)
 * select($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * select_by_id($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * update($table, $data, $where, $redirect)
 * delete($table, $where, $redirect, $limit = 1)
 *
 */
class Login_model extends Model {

	function __construct() {
		parent::__construct();
	}

	function check_user() {
		//'login' refers to username or email
		$query_statement = "SELECT * FROM squid_author WHERE username = :login AND password = :password OR email = :login AND password = :password";
		$query = $this->squid_dbase->prepare($query_statement);
		$query -> execute(array(":login" => $_POST['login'], 
					":password" => Hash::create('md5', $_POST['password'], HASH_KEY)));
		$data = $query -> fetch();
		$count = $query -> rowCount();

		if ($count > 0) {
			//login
			Session::init_session();
			Session::set_session_data('role', $data['role']);
			Session::set_session_data('author_id', $data['id']);
			Session::set_session_data('username', $data['username']);
			Session::set_session_data('firstname', $data['firstname']);
			Session::set_session_data('lastname', $data['lastname']);
			Session::set_session_data('email', $data['email']);
			Session::set_session_data('bio', $data['bio']);
			Session::set_session_data('display_name', $data['display_name']);
			Session::set_session_data('website', $data['website']);
			Session::set_session_data('role', $data['role']);
			Session::set_session_data('profile_picture', $data['profile_picture']);
			Session::set_session_data('logged_in', TRUE);
			header('location:' . URL . 'dashboard');
			exit ;
		} else {
			//do something else
			header('location:' . URL . 'login');
			exit ;
		}
	}

}

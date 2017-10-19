<?php
class Auth{
	public static function handle_login(){
		Session::init_session();
		$logged = Session::get_session_data('logged_in');
		$role = Session::get_session_data('role');
		if ($logged == FALSE) {
			Session::destroy_session();
			header('location:'.URL.'login');
			exit;
		}
	}	
}
?>
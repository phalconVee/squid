<?php

class Session{
	static function init_session(){
		@session_start();
	}	
	static function set_session_data($key, $value){
		$_SESSION[$key] = $value;
	}
	static function get_session_data($key){
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		}
	}
	public static function destroy_session(){
		session_destroy();
	}
}

?>
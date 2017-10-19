<?php
/**
 * bootstrap is the routing file
 * grabs url,
 * points to the controller,
 * points to method
 */
class Bootstrap {
	private $_url = null;
	private $_loaded_controller = null;
	function __construct() {
		//sets the protected url
		$this->_get_url();
		//sets the file
		$this->file = 'app/controller/'.$this->_url[0].'.php';
		//check if the controller specified in the url exists
		$this->_load_requested_controller();
		//if controller doesn't exist, load the default controller(index.php)
		//or load default controller if no url is set
		if (empty($this->_url[0])) {
			$this->_load_default_controller();
			return false;
		}
		//call to controller method after check
		$this->_call_controller_method();
	}
	//gets the url the user requests from the address bar
	private function _get_url(){
		$url = isset($_GET['url']) ? $_GET['url'] : null;
	 	$url = rtrim($url, '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
	 	$this->_url = explode('/', $url);
		
	}
	//loads the method for each controller that the user types
	private function _call_controller_method(){
		//check if theres a method in the url for the controller file before pointing to the method
		/**
		 * http://localhost/mvc/controller/method/(parameter)/(parameter)/(parameter)
		 * $url[0] controller
		 * $url[1] method
		 * $url[2] parameter (optional, can be more than 1)
		 */
		if (isset($this->_url[2])) {
			if (method_exists($this->_loaded_controller, $this->_url[1])) {
				$this->_loaded_controller->{$this->_url[1]}($this->_url[2]);
				return false;
			}else{
				$this->_error();
			}
		}else{
			//points to controller
			if (isset($this->_url[1])) {
				if (method_exists($this->_loaded_controller, $this->_url[1])) {
					$this->_loaded_controller->{$this->_url[1]}();
					return	false;
				}else{
					$this->_error();
				}
			}else{
				$this->_loaded_controller->index();
			}	
		}
	}
	//load the controller that the user requests 
	private function _load_requested_controller(){
		if (file_exists($this->file)) {
			//if controller exists
			require_once($this->file);
			$this->_loaded_controller = new $this->_url[0];
			$this->_loaded_controller->load_model($this->_url[0]);
			$this->_loaded_controller->load_funcs($this->_url[0]);
		}else{
			$this->_error();
			return false;
		}
	}
	//loads the default controller if no controller is specified
	private function _load_default_controller(){
		require_once('app/controller/index.php');
		$default_controller = new Index();
		$default_controller->index();
	}
	//loads the error page when user requested controller, method id not found
	private function _error(){
		require_once('app/controller/error.php');
		$this->_error_controller = new Error_page();
		$this->_error_controller->index();
		exit;
	}
}

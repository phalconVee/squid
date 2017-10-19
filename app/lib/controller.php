<?php
/**
 * 
 */
class Controller {
	
	function __construct() {
		//controller loads the base view file
		$this->view = new View(); 
	}
	function load_model($name){
		$model_path = 'app/model/'.$name.'_model.php';
		if (file_exists($model_path)) {
			require('app/model/'.$name.'_model.php');
			$model_name = $name.'_model';
			$this->model = new $model_name();
		}
	}
	function load_funcs($name){
		$funcs_path = 'app/funcs/'.$name.'_funcs.php';
		if (file_exists($funcs_path)) {
			require('app/funcs/'.$name.'_funcs.php');
			$funcs_name = $name.'_funcs';
			$this->funcs = new $funcs_name();
		}
	}
}

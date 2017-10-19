<?php 
/**
 * 
 */
class Index extends Controller{
	
	function __construct() {
		parent::__construct();
	}
	function index(){
		//$this->view->testing = $this->model->test();
		//$this->view->testing = $this->funcs->tryout();
		$this->view->site_title = 'MVC | Index';
		$this->view->render('index/index');
		
		
	}
	
}

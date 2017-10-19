<?php 
/**
 * 
 */
class About extends Controller{
	
	function __construct() {
		parent::__construct();
	}
	function index(){
		$this->view->read_message = $this->model->message();	
		$this->view->site_title = 'MVC | About';
		$this->view->render('about/index');
	}
	
}

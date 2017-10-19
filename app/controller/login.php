<?php 
/**
 * 
 */
class Login extends Controller{
	
	function __construct() {
		parent::__construct();
	}
	function index(){
		$this->view->site_title = 'Squid | Login';
		$this->view->render('login/index', 1);
	}
	function authenticate(){
		$this->model->check_user();
	}
}

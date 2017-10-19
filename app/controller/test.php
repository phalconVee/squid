<?php 
/**
 * 
 */
class Test extends Controller{
	
	function __construct() {
		parent::__construct();
		Auth::handle_login();
		$this->view->js = array("app/view/test/js/default.js");
		$this->view->css = array("app/view/test/css/style.css");
	}
	function index(){
		$this->view->site_title = 'Test';
		$this->view->render('test/index');
	}
	function logout(){
		Session::destroy_session();
		header('location:'.URL.'login');
		exit;
	}
	function aj_insert(){
		$this->model->aj_insert_db();
	}
	function aj_read(){
		$this->model->aj_read_db();
	}
	function aj_delete(){
		$this->model->aj_delete_db();
	}
}

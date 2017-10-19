<?php 
/**
 * 
 */
class Error_page extends Controller{
	
	function __construct() {
		parent::__construct();
		$this->view->js = array("app/view/error/js/default.js");
		$this->view->css = array("app/view/error/css/style.css");
	}
	function index(){
		$this->view->site_title = 'MVC | Error';
		$this->view->render('error/index');
	}
}

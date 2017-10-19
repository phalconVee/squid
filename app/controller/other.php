<?php 
/**
 * 
 */
class Other extends Controller{
	
	function __construct() {
		parent::__construct();
	}
	function index(){
		$this->view->site_title = 'MVC | Other';
		$this->view->render('other/index');
	}
	
}

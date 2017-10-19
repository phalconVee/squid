<?php 
/**
 * 
 */
class Note extends Controller{
	
	function __construct() {
		parent::__construct();
		Auth::handle_login();
		$this->view->js = array("app/view/note/js/default.js");
	}
	function index(){
		$this->view->site_title = 'MVC | Note';
		$this->view->db_result = $this->model->read_db();	
		$this->view->render('note/index');
	}
	function create(){
		$this->model->create_db();
	}
	function update(){
		$this->model->update_db();	
	}
	function update_page(){
		$this->view->site_title = 'MVC | Edit Note ';
		$this->view->data = $this->model->read_db_by_id();
		$this->view->render('note/edit');	
	}
	function delete(){
		$this->model->delete_db();
	}
}

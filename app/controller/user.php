<?php 
/**
 * 
 */
class User extends Controller{
	
	function __construct() {
		parent::__construct();
		Auth::handle_login();
		$this->view->js = array("app/view/user/js/default.js");
		$this->view->css = array("app/view/user/css/style.css");
	}
	function index(){
		$this->view->site_title = 'MVC | User';
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->user = $this->model->read_all_user();
		//$this->view->user = $this->model->read_all_user_and_post();
		$this->view->render('user/index', 1);
	}
	function render_add_user(){
		$this->view->site_title = 'MVC | Add User';
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->render('user/add_user', 1);
	}
	function render_edit_user(){
		$this->view->site_title = 'MVC | Edit User';
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->user = $this->model->read_selected_user();
		$this->view->render('user/edit_user', 1);	
	}
	function render_user_account(){
		$this->view->site_title = 'MVC | User Account';
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->render('user/user_account', 1);	
	}
	function render_profile(){
		$this->view->site_title = 'MVC | Profile';
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->render('user/profile', 1);	
	}
	function add_new_user(){
		$this->model->save_new_user();
	}
	function add_edit_user(){
		$this->model->save_edit_user();
	}
	function add_user_account(){
		$this->model->save_user_account();	
	}
	function delete_user(){
		$this->model->delete_selected_post();
	}
	function logout(){
		Session::destroy_session();
		header('location:'.URL.'login');
		exit;
	}
}

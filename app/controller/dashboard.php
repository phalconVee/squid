<?php 
/**
 * 
 */
class Dashboard extends Controller{
	
	function __construct() {
		parent::__construct();
		Auth::handle_login();
		$this->view->js = array("app/view/dashboard/js/default.js");
		$this->view->css = array("app/view/dashboard/css/style.css");
	}
	function index(){
		$this->view->site_title = 'MVC | Dashboard';
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->render('dashboard/index', 1);
	}
	function render_post(){
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->all_post = $this->model->read_all_post();
		$this->view->render('dashboard/post', 1);
	}
	function render_tag(){
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->all_tag = $this->model->read_all_tag();
		$this->view->render('dashboard/tag', 1);
	}
	function render_category(){
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->all_category = $this->model->read_all_category();
		$this->view->render('dashboard/category', 1);
	}
	function render_add_post(){
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->all_tag = $this->model->read_all_tag();
		$this->view->all_category = $this->model->read_all_category();
		$this->view->most_used_category = $this->model->read_most_used_category();
		$this->view->render('dashboard/add_post', 1);
	}
	function render_edit_post(){
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->all_category = $this->model->read_all_category();
		$this->view->most_used_category = $this->model->read_most_used_category();
		$this->view->selected_post = $this->model->read_selected_post();
		$this->view->render('dashboard/edit_post', 1);
	}
	function render_edit_tag(){
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->all_tag = $this->model->read_all_tag();
		$this->view->selected_tag = $this->model->read_selected_tag();
		$this->view->render('dashboard/edit_tag', 1);
	}
	function render_edit_category(){
		$this->view->count_post = $this->model->count_post_for_user();
		$this->view->all_category = $this->model->read_all_category();
		$this->view->selected_category = $this->model->read_selected_category();
		$this->view->render('dashboard/edit_category', 1);
	}
	function add_draft(){
		$this->model->save_draft();
	}
	function add_tag(){
		$this->model->save_tag();
	}
	function add_category(){
		$this->model->save_category();
	}
	function add_new_post(){
		$this->model->save_new_post();
		//$this->model->save_new_post_category();
	}
	function add_edit_post(){
		$this->model->save_selected_post();
	}
	function add_edit_tag(){
		$this->model->save_selected_tag();
	}
	function add_edit_category(){
		$this->model->save_selected_category();
	}
	function delete_post(){
		$this->model->delete_selected_post();
	}
	function delete_tag(){
		$this->model->delete_selected_tag();
	}
	function delete_category(){
		$this->model->delete_selected_category();
	}
	function logout(){
		Session::destroy_session();
		header('location:'.URL.'login');
		exit;
	}
}

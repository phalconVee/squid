<?php
/**insert($table, $data, $redirect)
 * select($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * select_by_id($query_statement, $array = array(), $fetch_mode = PDO::FETCH_ASSOC)
 * update($table, $data, $where, $redirect)
 * delete($table, $where, $redirect, $limit = 1)
 *
 */
  class Dashboard_model extends Model{
	
	function __construct() {
		parent::__construct();
		Session::init_session();
		$this->author_id = Session::get_session_data('author_id');
	}
	function count_post_for_user(){
		$query = $this->squid_dbase->prepare("SELECT * FROM squid_post WHERE author_id = :author_id");
		$query -> execute(array(':author_id' => $this->author_id));
		return $query->rowCount();
	}
	
	function update_post_count(){
		//START HERE
		//$post_data = array( 'post_count' => $_GET['count'] );
		//$this->squid_dbase->update('squid_post', $post_data, "`id` = {$_GET['e_id']}");
	}
	function read_all_post(){
		return $this->squid_dbase->select("SELECT id, title, date_published, enabled FROM squid_post WHERE author_id = :id", array('id' => $this->author_id));
	}
	function read_all_tag(){
		return $this->squid_dbase->select("SELECT * FROM squid_tag WHERE author_id = :id", array('id' => $this->author_id));
	}
	function read_all_category(){
		return $this->squid_dbase->select("SELECT * FROM squid_category WHERE author_id = :id", array('id' => $this->author_id));
	}
	function read_most_used_category(){
		return $this->squid_dbase->select("SELECT * FROM squid_category WHERE author_id = :id AND enabled != 0", array('id' => $this->author_id));
	}
	function read_selected_post(){
		return $this->squid_dbase->select_by_id("SELECT * FROM squid_post WHERE id = :id", array('id' =>$_GET['pe_id']));
	}
	function read_selected_tag(){
		return $this->squid_dbase->select_by_id("SELECT * FROM squid_tag WHERE id = :id", array('id' =>$_GET['te_id']));
	}
	function read_selected_category(){
		return $this->squid_dbase->select_by_id("SELECT * FROM squid_category WHERE id = :id", array('id' =>$_GET['ce_id']));
	}
	function save_draft(){
		$post_data = array( 'title' => $_POST['d_title'],
							'article' => $_POST['d_article'],
							'date_published' => date('D d F Y'),
							'author_id' => $this->author_id
						   );
		$query = $this->squid_dbase->insert('squid_post', $post_data, 'dashboard/render_post');
	}
	function save_tag(){
		$post_data = array( 'tag' => $_POST['t_title'],
							'author_id' => $this->author_id
						   );
		$query = $this->squid_dbase->insert('squid_tag', $post_data, 'dashboard/render_tag');
	}
	function save_category(){
		$post_data = array( 'category' => $_POST['c_title'],
							'description' => $_POST['c_description'],
							'date_created' => date('D d F Y'),
							'author_id' => $this->author_id
						   );
		$query = $this->squid_dbase->insert('squid_category', $post_data, 'dashboard/render_category');
	}
	function save_new_post(){
		if (!empty($_POST['p_category'])) {
			$cat = array($_POST['p_category']);
			$category = count($cat);
			for ($i=0; $i < $category; $i++) { 
				echo $category;
			}
			die();
		} else {
			$post_data = array( 'title' => $_POST['p_title'],
							'article' => $_POST['p_article'],
							'enabled' => $_POST['p_enabled'],
							'date_published' => date('D d F Y'),
							'author_id' => $this->author_id
						   );
			//$post_data = array( 'category_id' => $_POST['p_category']);
			//$query = $this->squid_dbase->insert('squid_post_to_category', $post_data, 'dashboard/render_post');
			$query = $this->squid_dbase->insert('squid_post', $post_data, 'dashboard/render_post');	
		}
	}
	/*function save_new_post(){
		echo $_POST['p_category'];
		die();
		$query_statement = "INSERT INTO squid_post(title, article, enabled, date_published, author_id, category) VALUES(:title, :article, :enabled, :date_published, :author_id, :category)";
		$query = $this->squid_dbase->prepare($query_statement);
		$query->execute(array(
							':title' => $_POST['p_title'],
							':article' => $_POST['p_article'],
							':enabled' => (isset($_POST['p_enabled'])) ? $_POST['p_enabled'] : 0,
							':date_published' => date('D d F Y'),
							':author_id' => $this->author_id,
							':category' => $_POST['p_category']
						));
		//$this->save_new_post_to_category();
	}
	function save_new_post_to_category(){
		$post_data = array( 'category_id' => $_POST['p_category']);
		$query = $this->squid_dbase->insert('squid_post_to_category', $post_data, 'dashboard/render_post');
	}*/
	function save_selected_post(){
		$post_data = array( 'title' => $_POST['e_title'],
							'article' => $_POST['e_article'],
							'enabled' => $_POST['e_enabled'],
							'last_edited' => date('D d F Y'),
							'category' => $_POST['p_category'].","
						   );
		$this->squid_dbase->update('squid_post', $post_data, "`id` = {$_GET['e_id']}", 'dashboard/render_post');
	}
	function save_selected_tag(){
		$post_data = array( 'tag' => $_POST['te_title'] );
		$this->squid_dbase->update('squid_tag', $post_data, "`id` = {$_GET['e_id']}", 'dashboard/render_tag');
	}
	function save_selected_category(){
		$post_data = array( 
							'category' => $_POST['ce_title'],
							'description' => $_POST['ce_description']
						   );
		$this->squid_dbase->update('squid_category', $post_data, "`id` = {$_GET['e_id']}", 'dashboard/render_category');
	}
	function delete_selected_post(){
		$this->squid_dbase->delete('squid_post', "`id` = {$_GET['pd_id']}", 'dashboard/render_post');
	}
	function delete_selected_tag(){
		$this->squid_dbase->delete('squid_tag', "`id` = {$_GET['td_id']}", 'dashboard/render_tag');
	}
	function delete_selected_category(){
		$this->squid_dbase->delete('squid_category', "`id` = {$_GET['cd_id']}", 'dashboard/render_category');
	}
}

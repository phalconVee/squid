<!DOCTYPE HTML >
<html lang="en">
<head>
	<title>Admin Template</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!--bootstrap css link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/dashboard/asset/css/bootstrap.css"/>
	<!--default css link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/dashboard/asset/css/default.css"/>
	<!--custom font link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/dashboard/asset/font_awesome/css/font-awesome.css"/>
	<!--jquery link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/dashboard/asset/js/jquery.js"></script>
	<!--bootstrap javascript link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/dashboard/asset/js/bootstrap.js"></script>
	<!--ckeditor link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/dashboard/asset/ckeditor/ckeditor.js"></script>
	<!--default javascript link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/dashboard/asset/js/style.js"></script>
</head>
<body>
	<?php Session::init_session();?>
    <?php $display_name = Session::get_session_data('display_name');?>
	<div id="wrapper">
	<!--navigation bar section-->
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--button for toggling the sidebar -->
          <a class="navbar-brand hidden-xs" id="sidebar_toggle" href="#"><span class="fa fa-bars"></span></a>
          <a class="navbar-brand" id="sidebar_toggle" href="#">Navbar Brand</a>
        </div>
        
        <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"><span class="fa fa-refresh"></span> 17</a></li>
            <li><a href="<?php echo URL;?>dashboard/render_add_post"><span class="fa fa-plus"></span> New Post</a></li>
            <li><a href="#"><span class="fa fa-comments-o"></span> 25</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $display_name; ?> <i class="fa fa-caret-down"></i></a>
            	<ul id="navbar_sublist" class="hidden-xs">
					<li><a href="#"><i class="fa fa-plus"></i><span>Add</span></a></li>
					<li><a href="#"><i class="fa fa-edit"></i><span>Edit</span></a></li>
					<li><a href="#"><i class="fa fa-remove"></i><span>Delete</span></a></li>
				</ul>
            </li>
            <li><a href="<?php echo URL;?>dashboard/logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
        
      </div>
    </nav>
	<!--header section-->
	
	<div id="content_wrapper">		
	<!--sidebar-->
	<!--sidebar navigation item-->
	<div id="sidebar_nav" class="hidden-xs">
		<ul id="sidebar_mainlist">
			<!--sidebar links-->
		<!--profile section in sidebar-->
		<div class="media">
		  <div class="media-left">
		    <a href="#">
		      <img class="media-object img-circle" src="<?php echo URL;?>/app/view/dashboard/asset/img/face-1.jpg" alt="profile photo">
		    </a>
		  </div>
		  <div class="media-body">
		    <h5 class="media-heading">Welcome, <?php echo $display_name; ?></h5>
		    <div id="icon_bar">
		    	<a href="login.php"><i class="fa fa-power-off" title="Logout" style="color: #d9534f;"></i></a>
		    	<a href="#"><i class="fa fa-bell" title="Notification" style="color:  #5cb85c;"></i></a>
		    	<a href="<?php echo URL;?>user/render_profile"><i class="fa fa-id-badge" title="Profile Setting" style="color: #5bc0de;"></i></a>
		    </div>
		  </div>
		</div>
		<!-- sidebar links-->
		<li><a href="<?php echo URL;?>dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<li>
			<a href="<?php echo URL;?>dashboard/render_post"><i class="fa fa-thumb-tack"></i><span>Post</span> </a>
			<div class="pull-right">
				<i class="badge"><?php echo $this->count_post; ?></i>
				<i class="fa fa-chevron-right"></i>
			</div>
			<!-- sidebar sublinks-->
			<ul id="sidebar_sublist">
				<li><a href="<?php echo URL;?>dashboard/render_add_post"><i class="fa fa-plus"></i>Add</a></li>
				<li><a href="<?php echo URL;?>dashboard/render_tag"><i class="fa fa-bookmark"></i>Tags</a></li>
				<li><a href="<?php echo URL;?>dashboard/render_category"><i class="fa fa-folder"></i>Category</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-book"></i> <span>Pages</span></a>
			<div class="pull-right">
				<i class="badge">8</i>
				<i class="fa fa-chevron-right"></i>
			</div>
			<!-- sidebar sublinks-->
			<ul id="sidebar_sublist">
				<li><a href="add_post.php"><i class="fa fa-plus"></i>Add</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-folder-open-o"></i> <span>Category</span></a></li>
		<li><a href="#"><i class="fa fa-tags"></i> <span>Tags</span></a></li>
		<li><a href="#"><i class="fa fa-camera-retro"></i> <span>Gallery</span></a></li>
		<li><a href="<?php echo URL;?>user/render_user_account"><i class="fa fa-users"></i> <span>Account</span></a>
			<i class="fa fa-chevron-right pull-right"></i>
			<!-- sidebar sublinks-->
			<ul id="sidebar_sublist">
				<li><a href="<?php echo URL;?>user"><i class="fa fa-user"></i>View Users</a></li>
				<li><a href="<?php echo URL;?>user/render_add_user"><i class="fa fa-user-plus"></i>Add User</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
	</div>
	
	
	<!--main area-->
		<!--main area-->
	<section id="main_area">
		<div class="container-fluid">
			<div class="row">
				<!--post page header-->
				<div class="container" id="dashboard_header">
				<div class="col-md-12">
					<h3><i class="fa fa-thumb-tack"></i> Post |<small> Edit post</small></h3>
				</div>
				</div>
				<!--add post form-->
				<div class="col-md-8">
					<!--website overview-->
					<div class="panel panel-default" id="add_post">
					  <div class="panel-heading">
					    <h3 class="panel-title">Edit Post</h3>
					  </div>
					  
					  <div class="panel-body">
					  	<form action="<?php echo URL;?>dashboard/add_edit_post?e_id=<?php echo $this->selected_post['id'];?>&&count=<?php echo $this->count_post; ?>" method="post">
					      <div class="form-group">
							  <label>Title</label>
							  <input type="text" class="form-control" name="e_title" aria-describedby="basic-addon1" value="<?php echo $this->selected_post['title'];?>" required>
							</div>
							
							<div class="form-group">
							  <label>Content</label>
							  <textarea name="e_article" id="editor1" class="form-control" rows="12" optional>
							  		<?php echo $this->selected_post['article'];?>
							  </textarea>
							</div>
							
							<div class="checkbox">
							  <label>
								<input type="checkbox" <?php if($this->selected_post['enabled'] == 1){ echo 'checked';} ?> name="e_enabled" value="1"/> Published
							  </label>
							</div>
							
							<input type="submit" name="update_post" class="btn btn-info btn-xs" value="Update"/>
						 </form>
					  </div>
					  
					  <div class="panel-footer">
					  	<p class="pull-right">Last Edited by: Ugorji Eze on <?php echo $this->selected_post['last_edited'];?></p>
					  </div>
					</div>	
								
				</div>
				
				<div class="col-md-4">
					<!--website overview-->
					<div class="panel panel-default" id="add_post_option">
					  <div class="panel-body">
					  	
					  	<!--accordion for publish information-->
					  	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="heading_publish">
						      <h4 class="panel-title">
						        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_publish" aria-expanded="true" aria-controls="collapseOne">
						          Publish
						          <i class="fa fa-caret-down pull-right"></i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse_publish" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_publish">
						      <div class="panel-body">
									<div class="col-md-12">
										<a href="#" class="btn btn-primary btn-xs pull-right"> Preview</a>	
									</div>
									<br />
									<p>
										Status: Published <a href="#">Edit</a><br />
										Visibility: Public <a href="#">Edit</a><br />
										<i class="fa fa-calendar"></i> Published 03-06-2017
										<a href="#">Edit</a>
									</p>
									<hr />
									<div class="col-md-12">
										<a href="#" class="">Trash</a>
									</div>
						      </div>
						    </div>
						  </div>
						
						<!--accordion for category information-->  
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="heading_category">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_category" aria-expanded="false" aria-controls="collapse_category">
						          Categories
						          <i class="fa fa-caret-down pull-right"></i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse_category" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_category">
						      <div class="panel-body">
						      	<div id="category_tabs">
						   		
						   		<ul class="nav nav-tabs">
								  <li role="presentation" class="active"><a href="#all_categories_tab" data-toggle="tab">All Categories</a></li>
								  <li role="presentation"><a href="#most_used_tab" data-toggle="tab">Most Used</a></li>
								</ul>
								<div class="tab-content clearfix">
									
									<div class="tab-pane" id="most_used_tab">
									<ul id="category_list">
							    		<?php foreach ($this->selected_post as $selected_post) {?>
										<li>
					    					<div class="checkbox">
											  <label>
												<input type="checkbox" value="<?php echo $selected_post['id'];?>"/> <?php echo $selected_post['category'];?></td>
											  </label>
											</div>
							    		</li>
										<?php }?>
							    	</ul>
									</div>
									
									<div class="tab-pane active" id="all_categories_tab">
									<ul id="category_list">
							    		<?php foreach ($this->all_category as $category) {?>
										<li>
					    					<div class="checkbox">
											  <label>
												<input type="checkbox" name="p_category" value="<?php echo $category['id'];?>"/> <?php echo $category['category'];?>
											  </label>
											</div>
							    		</li>
										<?php }?>
							    	</ul>
									</div>
									
								</div>								
								<hr />
								<a href="#">+Add New Category</a>
						      </div>
						      
						      </div>
						    </div>
						  </div>
						  
						  <!--accordion for tag information-->
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="heading_tag">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_tag" aria-expanded="false" aria-controls="collapse_tag">
						          Tags
						          <i class="fa fa-caret-down pull-right"></i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse_tag" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_tag">
						      <div class="panel-body">
								  <form class="form-inline">
								  <div class="form-group">
								    <input type="text" class="form-control">
								  </div>
								  <button type="submit" class="btn btn-primary">Add</button>
								</form>
								   <p>Seperate tags with comma</p>	
						          <hr />
						          <a href="#">Choose From Most Used</a>
						      </div>
						    </div>
						  </div>
						  
						  <!--accordion for featured information-->
						  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="heading_featured_image">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_featured_image" aria-expanded="false" aria-controls="collapse_featured_image">
						          Featured Image
						          <i class="fa fa-caret-down pull-right"></i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse_featured_image" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_featured_image">
						      <div class="panel-body">
						      	<img src="<?php echo URL;?>/app/view/dashboard/asset/img/sample4.jpg" class="img-responsive" alt="Responsive image">
						       	<a href="#">Pick Featured Image</a>
						      </div>
						    </div>
						  </div>
						  
						</div>
					  </div>
					</div>				
				</div>		
						
			</div>
		</div>
	</section>
	</div>
	
		
</div>
</body>
<footer id="footer">
	<!-- <p> Copyright Admin Theme Template &copy; 2017</p> -->
</footer>
</html>

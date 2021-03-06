<!--<h1> Edit <?php echo $this->data['u_login'];?></h1>
<p id="error_message" style="color: red;"></p>
<br />

<form action="<?php echo URL;?>user/update?edit_id=<?php echo htmlspecialchars($this->data['user_id']);?>" method="post" onsubmit="return validate_form_data();">
	<input type="text" name="u_login" value="<?php echo $this->data['u_login'];?>" required id="u_login"/>
	<select name="u_role">
		<option value="admin" <?php if($this->data['role'] == 'admin'){echo "selected";}?>>Admin</option>
		<option value="default" <?php if($this->data['role'] == 'default'){echo "selected";}?>>Default</option>
	</select>
	<input type="submit"  name="submit" value="submit"/>
</form>
-->
<!DOCTYPE HTML >
<html lang="en">
<head>
		<!--bootstrap css link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/user/asset/css/bootstrap.css"/>
	<!--default css link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/user/asset/css/default.css"/>
	<!--custom font link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/user/asset/font_awesome/css/font-awesome.css"/>
	<!--jquery link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/user/asset/js/jquery.js"></script>
	<!--bootstrap javascript link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/user/asset/js/bootstrap.js"></script>
	<!--ckeditor link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/user/asset/ckeditor/ckeditor.js"></script>
	<!--default javascript link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/user/asset/js/style.js"></script></head>
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
            <li><a href="#">Welcome, <?php echo $display_name;?> <i class="fa fa-caret-down"></i></a>
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
		      <img class="media-object img-circle" src="<?php echo URL;?>/app/view/dashboard/asset/img/face-1.jpg" alt="...">
		    </a>
		  </div>
		  <div class="media-body">
		    <h5 class="media-heading">Welcome, <?php echo $display_name;?> </h5>
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
	<section id="main_area">
		<div class="container-fluid">
			<div class="row">
				<!--add user page header-->
				<div class="container" id="dashboard_header">
				<div class="col-md-12">
					<h3><i class="fa fa-users"></i> User |<small> Edit User</small></h3>
				</div>
				</div>
				
				<div class="col-md-12">
					<!--add user form-->
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">User</h3>
					  </div>
					  <div class="panel-body">
					    <div class="row">
					    	<div class="col-md-9">
					    		<div class="col-md-12">
					    			<p > Create a brand new user and add them to this site.</p>
					    			<br/>	
					    		</div>
					    		<form class="form-horizontal" action="<?php echo URL;?>user/add_edit_user?e_id=<?php echo htmlspecialchars($this->user['id']);?>" method="post">
									  <div class="form-group">
									    <label for="input_username" class="col-sm-3 control-label">Username <i>(Required)</i></label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" id="input_username" value="<?php echo $this->user['username'];?>" name="u_username" required/>
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="input_display_name" class="col-sm-3 control-label">Display Name <i>(Required)</i></label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" id="input_display_name" value="<?php echo $this->user['display_name'];?>"  name="u_displayname" required/>
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">Password <i>(Required)</i></label>
									    <div class="col-sm-6">
									      <input type="text" class="form-control" id="inputPassword3"  name="u_password" optional/>
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="input_role" class="col-sm-3 control-label">Role</label>
									    <div class="col-sm-3">
										  <select class="form-control"id="input_role" name="u_role">
											  <option value="<?php echo $this->user['role'];?>"> <?php echo $this->user['role'];?> </option>
										  </select>
									    </div>
									  </div>
									  <div class="form-group">
									    <label class="col-sm-3 control-label">Send Password?</label>
									    <div class="col-sm-6">
									      <input type="checkbox" /> Send this password to new user by email
									    </div>
									  </div>
									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-6">
									      <button type="submit" class="btn btn-info btn-xs">Update Account</button>
									    </div>
									  </div>
								</form>
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

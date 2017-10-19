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
            <li><a href="#">Welcome, <?php echo $display_name;?> <i class="fa fa-caret-down hidden-xs"></i></a>
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
		    <h5 class="media-heading">Welcome, <?php echo $display_name;?></h5>
		    <div id="icon_bar">
		    	<a href="<?php echo URL;?>dashboard/logout"><i class="fa fa-power-off" title="Logout" style="color: #d9534f;"></i></a>
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
				<li><a href="<?php echo URL;?>user/add_user"><i class="fa fa-user-plus"></i>Add User</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
	</div>
	
	
	<!--main area-->
	<!--main area-->
	<section id="main_area">
		<div class="container-fluid">
			<div class="row">
							<!--dashboard header-->
				<div class="container" id="dashboard_header">
				<div class="col-md-12">
					<h3><i class="fa fa-bookmark"></i> Tag |<small> manage your site tags</small></h3>
				</div>
				</div>
				
				<!-- tag form-->
				<div class="col-md-4">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<h4>Tag</h4>
				    <form action="<?php echo URL;?>dashboard/add_edit_tag?e_id=<?php echo $this->selected_tag['id']?>" method="post" >
					  <div class="form-group">
					   <label for="category_title">Title</label>
					    <input type="text" class="form-control" name="te_title" value="<?php echo $this->selected_tag['tag']; ?>" required/>
					  </div>
					  <button type="submit" class="btn btn-info btn-xs">Update Tag</button>
					</form>
					<hr />
					<p>Seperate tags with comma</p>
				  </div>
				</div>
				</div>
				
				<!--tag list-->
				<div class="col-md-5 col-md-offset-3">
					<div class="panel panel-default">
					  <div class="panel-body">
					    <div class="row">
					    	<div class="col-md-12 hidden-xs">
					    	<form class="form-inline pull-right">
							  <div class="form-group">
							    <label for="form_search" class="sr-only">Search</label>
							    <input type="input" class="form-control" id="form_search" placeholder="Search" />
							  </div>
							  <button type="submit" class="btn btn-default btn-md btn-fill"><i class="fa fa-search"></i></button>
							</form>
							</div>
						</div>
					    	<hr />
					    	<div class="table-responsive">
					    	<table class="table table-hover">
					    		<thead>
					    			<th class="col-md-8"></th>
					    			<th class="col-md-4"></th>
					    		</thead>
					    	<tbody>
					    		<?php foreach ($this->all_tag as $tag) {?>
										<tr>
					    				<td> <?php echo $tag['tag'];?></td>
					    				<td>
					    					<a class="btn btn-default btn-xs" title="Edit Tag" href="<?php echo URL;?>dashboard/render_edit_tag?te_id=<?php echo $tag['id'];?>"><i class="fa fa-edit"></i> </a> 
					    					<a class="btn btn-danger btn-xs" title="Delete Tag" href="<?php echo URL;?>dashboard/delete_tag?td_id=<?php echo $tag['id'];?>"><i class="fa fa-remove"></i></a>
					    				</td>
					    		</tr>
								<?php }?>
					    	</tbody>
					    </table>
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

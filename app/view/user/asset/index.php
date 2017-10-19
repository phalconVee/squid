<!DOCTYPE HTML >
<html lang="en">
<head>
	<title>Admin Template</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!--bootstrap css link-->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css"/>
	<!--default css link-->
	<link rel="stylesheet" type="text/css" href="asset/css/default.css"/>
	<!--custom font link-->
	<link rel="stylesheet" type="text/css" href="asset/font_awesome/css/font-awesome.css"/>
	<!--jquery link-->
	<script type="text/javascript" src="asset/js/jquery.js"></script>
	<!--bootstrap javascript link-->
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
	<!--ckeditor link-->
	<script type="text/javascript" src="asset/ckeditor/ckeditor.js"></script>
	<!--default javascript link-->
	<script type="text/javascript" src="asset/js/style.js"></script>
</head>
<body>
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
            <li><a href="#"><span class="fa fa-plus"></span> New Post</a></li>
            <li><a href="#"><span class="fa fa-comments-o"></span> 25</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Eze <i class="fa fa-caret-down"></i></a>
            	<ul id="navbar_sublist" class="hidden-xs">
					<li><a href="#"><i class="fa fa-plus"></i><span>Add</span></a></li>
					<li><a href="#"><i class="fa fa-edit"></i><span>Edit</span></a></li>
					<li><a href="#"><i class="fa fa-remove"></i><span>Delete</span></a></li>
				</ul>
            </li>
            <li><a href="login.php">Logout</a></li>
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
		      <img class="media-object img-circle" src="asset/img/face-1.jpg" alt="...">
		    </a>
		  </div>
		  <div class="media-body">
		    <h5 class="media-heading">Welcome, Ugorji Eze </h5>
		    <div id="icon_bar">
		    	<a href="login.php"><i class="fa fa-power-off" title="Logout" style="color: #d9534f;"></i></a>
		    	<a href="#"><i class="fa fa-bell" title="Notification" style="color:  #5cb85c;"></i></a>
		    	<a href="#"><i class="fa fa-id-badge" title="Profile Setting" style="color: #5bc0de;"></i></a>
		    </div>
		  </div>
		</div>
		<!-- sidebar links-->
		<li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<li>
			<a href="post.php"><i class="fa fa-thumb-tack"></i><span>Post</span> </a>
			<div class="pull-right">
				<i class="badge">36</i>
				<i class="fa fa-chevron-right"></i>
			</div>
			<!-- sidebar sublinks-->
			<ul id="sidebar_sublist">
				<li><a href="add_post.php"><i class="fa fa-plus"></i>Add</a></li>
				<li><a href="add_post.php"><i class="fa fa-edit"></i>Edit</a></li>
				<li><a href="#"><i class="fa fa-pencil"></i>Drafts</a></li>
				<li><a href="#"><i class="fa fa-send-o"></i>Published</a></li>
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
				<li><a href="add_post.php"><i class="fa fa-edit"></i>Edit</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-folder-open-o"></i> <span>Category</span></a></li>
		<li><a href="#"><i class="fa fa-tags"></i> <span>Tags</span></a></li>
		<li><a href="#"><i class="fa fa-camera-retro"></i> <span>Gallery</span></a></li>
		<li><a href="#"><i class="fa fa-users"></i> <span>Account</span></a>
			<i class="fa fa-chevron-right pull-right"></i>
			<!-- sidebar sublinks-->
			<ul id="sidebar_sublist">
				<li><a href="user.php"><i class="fa fa-user"></i>View Users</a></li>
				<li><a href="add_user.php"><i class="fa fa-user-plus"></i>Add User</a></li>
			</ul>
		</li>
		<li><a href="#"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
	</div>
	
	
	<!--main area-->
	<section id="main_area">
		<div class="container-fluid">
			<div class="row">
							<!--dashboard header-->
				<div class="container" id="dashboard_header">
				<div class="col-md-12">
					<h3><i class="fa fa-dashboard"></i> Dashboard |<small> manage your site</small></h3>
				</div>
				</div>
				
				<!--dashboard drafts panel-->
				<div class="col-md-6">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	<h4>Quick Drafts</h4>
				    <form>
					  <div class="form-group">
					    <label for="draft_title">Title</label>
					    <input type="email" class="form-control" id="draft_title" placeholder="Draft Title">
					  </div>
					  <div class="form-group">
					  <label for="draft_content">What's on your mind?</label>
					  <textarea class="form-control" rows="4" id="draft_content" placeholder="Draft Content"></textarea>
					  </div>
					  <button type="submit" class="btn btn-info btn-xs">Save Draft</button>
					</form>
				  </div>
				</div>
				</div>
				
				<!--dashboard at a glance notification-->
				<div class="col-md-6">
				<div class="panel panel-default" id="glace_notification">
				  <div class="panel-body">
				  	<h4>At A Glance</h4>
				    <div class="row" id="glace_notification_icon">
                    	<div class="col-md-4">
                    		<i class="fa fa-thumb-tack"></i>
                    		<a href="#"><h5>25 Posts</h5></a>
                    	</div>
                    	<div class="col-md-4">
                    		<i class="fa fa-file-text"></i>
                    		<a href="#"><h5>2 Pages</h5></a>
                    	</div>
                    	<div class="col-md-4">
                    		<i class="fa fa-comments-o"></i>
                    		<a href="#"><h5>250 Comments</h5></a>
                    	</div>
                    </div>
                    <div class="footer">
                    	<hr />
                    	Creative Tim, made with love for a better web 
                    </div>
				  </div>
				</div>
				</div>
				<!---->
                <div class="col-md-6">
		            <div class="panel panel-default" id="activity_notification">
		                <div class="panel-body">
		                    <h4 class="title">Activity</h4>
		                    <p class="category">Comments</p>
		                </div>
		                <div class="table-full-width table_comment">
	                        <table class="table">
	                            <tbody>
	                                <tr>
	                                    <td class="col-md-2">
	                                        <img src="asset/img/default-avatar.png" class="img-responsive img-thumbnail" />
	                                    </td>
	                                    <td class="col-md-7">Sign <a href="#">Contract</a> on <a href="#">"What are conference organizers</a> afraid of?"</td>
	                                    <td class="td-actions text-right col-md-3">
	                                        <a href="#" rel="tooltip" title="Reply comment" style="color: #5cb85c;">
	                                            <i class="fa fa-reply"></i>
	                                        </a>
	                                        <a href="#" rel="tooltip" title="Edit Task" style="color: #5bc0de;">
	                                            <i class="fa fa-edit"></i>
	                                        </a>
	                                        <a href="#" rel="tooltip" title="Remove" style=" color: #d9534f;">
	                                            <i class="fa fa-times"></i>
	                                        </a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td class="col-md-2">
	                                        <img src="asset/img/default-avatar.png" class="img-responsive img-thumbnail" />
	                                    </td>
	                                    <td class="col-md-7">Lines <a href="#">From </a> Great Russian Literature? On <a href="#">E-mails</a> From My Boss?</td>
	                                    <td class="td-actions text-right col-md-3">
	                                        <a href="#" rel="tooltip" title="Reply comment" style="color: #5cb85c;">
	                                            <i class="fa fa-reply"></i>
	                                        </a>
	                                        <a href="#" rel="tooltip" title="Edit comment" style="color: #5bc0de;">
	                                            <i class="fa fa-edit"></i>
	                                        </a>
	                                        <a href="#" rel="tooltip" title="Remove" style=" color: #d9534f;">
	                                            <i class="fa fa-times"></i>
	                                        </a>
	                                    </td>
	                                </tr>
	                                <tr>
	                                    <td class="col-md-2">
	                                        <img src="asset/img/default-avatar.png" class="img-responsive img-thumbnail" />
	                                    </td>
	                                    <td class="col-md-7">Lines <a href="#">From </a> Great Russian Literature? On <a href="#">E-mails</a> From My Boss?</td>
	                                    <td class="td-actions text-right col-md-3">
	                                        <a href="#" rel="tooltip" title="Reply comment" style="color: #5cb85c;">
	                                            <i class="fa fa-reply"></i>
	                                        </a>
	                                        <a href="#" rel="tooltip" title="Edit comment" style="color: #5bc0de;">
	                                            <i class="fa fa-edit"></i>
	                                        </a>
	                                        <a href="#" rel="tooltip" title="Remove" >
	                                            <i class="fa fa-times" style=" color: #d9534f;"></i>
	                                        </a>
	                                    </td>
	                                </tr>
	                                
	                            </tbody>
	                        </table>
	                    </div>
		
	                    <div id="activity_notification_footer">
	                        <hr>
	                        <div class="stats">
	                            <i class="fa fa-history"></i> Updated 3 minutes ago <br />
	                            <div>
	                            	<a href="#">All (0)</a> | <a href="#">Pending (0) </a> | <a href="#">Approved</a> | <a href="#">Spam (23,025)</a>
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

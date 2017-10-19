<!DOCTYPE HTML >
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!--bootstrap css link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/login/asset/css/bootstrap.css"/>
	<!--default css link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/login/asset/css/default.css"/>
	<!--custom font link-->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/app/view/login/asset/font_awesome/css/font-awesome.css"/>
	<!--jquery link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/login/asset/js/jquery.js"></script>
	<!--bootstrap javascript link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/login/asset/js/bootstrap.js"></script>
	<!--ckeditor link-->
	<!--default javascript link-->
	<script type="text/javascript" src="<?php echo URL;?>/app/view/login/asset/js/style.js"></script>
</head>
<body>
	<div>	
	<!--main area-->
	<section id="login_area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					  	<h2><i class="fa fa-lock"></i> Login</h2>
					  </div>
					  <div class="panel-body">
					    <form action="<?php echo URL;?>login/authenticate" method="post">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Username or Email</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username or Email" name="login"  required/>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"  required/>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Remember me?
						    </label>
						  </div>
						  <input type="submit" class="btn btn-info btn-xs" value="Login"/>
						</form>
					  </div>
					  <div class="panel-footer">
					  	<a href="#" class="pull-left"><i class="fa fa-long-arrow-left"></i> Back</a>
					  	<a href="#" class="pull-right">forgot password?</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		
</div>
</body>
<footer id="footer">
	<!-- <p> Copyright Admin Theme Template &copy; 2017</p> -->
</footer>
</html>

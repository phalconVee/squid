<html>
<head>
	<title><?php if(isset($this->site_title)){echo $this->site_title;}else{echo 'MVC CRUD';}?></title>
	<script type="text/javascript" src="<?php echo URL;?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>public/js/custom.js"></script> 
	<?php	if (isset($this->js)) {
			foreach ($this->js as $js) {
				echo "<script type='text/javascript' src=".URL.$js."></script>";
				}
			} 
	?>
	<?php	if (isset($this->css)) {
			foreach ($this->css as $css) {
				echo "<link rel='stylesheet' type='text/css' href='".URL.$css."'/>";
				}
			} 
	?>
</head>
<body>
	<?php Session::init_session(); ?>
		
	<div id="header">
		<br />
		<?php 
			Session::init_session();
			$logged = Session::get_session_data('logged_in');
			$role = Session::get_session_data('role');
			if($logged == FALSE){
		?>
				<a href="<?php echo URL; ?>index">Home</a>
				<a href="<?php echo URL; ?>about">About</a>	
		<?php	}
			if ($logged == TRUE ) {
		?>		
				<a href="<?php echo URL; ?>dashboard">Dashboard</a>
				<a href="<?php echo URL; ?>note">Notepad</a>
				<?php if($role == 'owner'){ ?>
					<a href="<?php echo URL; ?>user">Users</a>
				<?php } ?>
				<a href="<?php echo URL; ?>dashboard/logout">Logout</a>
		<?php }else{ ?>
				<a href="<?php echo URL; ?>login">Login</a>
		<?php } ?>
	</div>
	<div id="content">
		<?php 
			Session::init_session();
			$logged = Session::get_session_data('logged_in');
			$author = Session::get_session_data('author');
			if ($logged == TRUE ){
		?>
			<p>Welcome, <b><?php echo $author;?></p>
		<?php }?>
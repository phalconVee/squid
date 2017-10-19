<?php
function __autoload($class){
	require('app/lib/'.$class.'.php');	
} 
//require('lib/bootstrap.php');
//require('lib/controller.php');
//require('lib/view.php');
	require('app/config/config.php');
	require('app/util/auth.php');	
$bootstrap =  new Bootstrap();
?>
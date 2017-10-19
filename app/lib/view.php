<?php
/**
 * 
 */
class View {
	
	function __construct(){
	}
	function render($view_name, $include = FALSE){
		if ($include == TRUE) {
			require('app/view/'.$view_name.'.php');
		}else{
			require('app/view/header.php');
			require('app/view/'.$view_name.'.php');
			require('app/view/footer.php');
		}
	}
}

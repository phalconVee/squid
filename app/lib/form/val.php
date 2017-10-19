<?php
class Val{
	public function __construct(){
		
	}
	public function min_length_val($data, $arg){
		if (trim(strlen($data)) < $arg) {
			return "Your string can only be".$arg."long";
		}
	}
	public function int_val($data){
		if (ctype_digit($data) == FALSE) {
			return "This field only accepts Integer";
		}
	}
	public function __call($name, $argument){
		throw new Exception($name."does not exist inside of:".__CLASS__);
	}
}
?>
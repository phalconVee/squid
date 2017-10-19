<?php
/**
 * 
 */
class Model{
	
	function __construct(){
		$this->squid_dbase = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
		$this->form = new Form();
	}
}

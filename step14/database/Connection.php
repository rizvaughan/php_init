<?php

class Connection {

	public static function make(){

	try {
	return new PDO('mysql:host=localhost;dbname=mytodo','root','lenovo');
} catch (PDOException $e) {
	die('Couldn\'t connect to the specified database '.$e);
		}
	}
	
}
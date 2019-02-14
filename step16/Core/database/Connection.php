<?php

class Connection {

	public static function make($config){

	try {
	//return new PDO('mysql:host=localhost;dbname=mytodo','root','lenovo');
	return new PDO(
		$config['connection'].$config['name'],$config['user'],$config['pass'],$config['options']
	);
} catch (PDOException $e) {
	die('Couldn\'t connect to the specified database '.$e);
		}
	}
	
}
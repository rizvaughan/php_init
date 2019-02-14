<?php

class Request{

	public static function uri(){

		return str_replace("/php-learning/step17/index.php/","", $_SERVER['REQUEST_URI']);
	}
}
<?php

class Request{

	public static function uri(){

		$input =  str_replace("/php-learning/step19/index.php/","", $_SERVER['REQUEST_URI']);
		return parse_url($input,PHP_URL_PATH);

	}

	public static function method(){

		return $_SERVER['REQUEST_METHOD'];
	}

}
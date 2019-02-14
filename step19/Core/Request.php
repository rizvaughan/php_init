<?php

class Request{

	public static function uri(){

		$input =  str_replace("/php-learning/step19/index.php/","", $_SERVER['REQUEST_URI']);
		var_dump(parse_url($input,PHP_URL_PATH));

	}

}
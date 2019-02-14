<?php

class Request{

	public static function uri(){

		return str_replace("/php-learning/step16/index.php/","", $_SERVER['REQUEST_URI']);
	}
}
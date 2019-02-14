<?php

return [

 'database' => [
	 
	 'name' => 'dbname=mytodo',
	 'connection' => 'mysql:host=localhost;',
	 'user' => 'root',
	 'pass' => 'lenovo',
	 'options' => [
	 	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	 ]
]
];
<?php

require 'functions.php';

class Task {

	public $description;

	public $completed = false;

	public function __construct($description,$completed){

		$this->description = $description;
		$this->completed = $completed;
	}

	public function isComplete(){

		return $this->completed;
	}

	public function complete(){

		$this->completed = true;
	}

}

	$tasks = [

		new Task('go to the store',1),
		new Task('do your homework',0),
		new Task('clean your room',0)
	];

	require 'index.view.php';



<?php

require 'Task.php';
require 'functions.php';

$pdo = connectToDb();

$tasks = FetchAllTasks($pdo);

require 'index.view.php';



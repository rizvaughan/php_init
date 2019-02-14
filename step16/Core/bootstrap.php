<?php

$app = [];


$app['config'] = require 'config.php'; 
require 'Core/database/Connection.php';
require 'Core/database/QueryBuilder.php';
require 'Core/Router.php';
require 'Request.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
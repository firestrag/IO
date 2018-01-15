<?php

require_once 'application/functions/functions.php';

session_start();
ob_start();
Power_Power::run();

function __autoload($class_name){
	$path = str_replace("_", "/", $class_name);
	$path = ucfirst($path);
	require_once 'application/class/'.$path.'.php';
}
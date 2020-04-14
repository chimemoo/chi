<?php


	// Define DIRECTIORY SEPARATOR AND ROOT FOLDER
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',dirname(__FILE__));
	
	// PATCH PATH INFO TO ARRAY
	$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';

	// Import Bootstrap
	require_once(ROOT . DS . 'system' . DS . 'bootstrap.php');
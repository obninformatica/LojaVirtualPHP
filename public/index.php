<?php
//print_r($_SERVER["REQUEST_URI"]);
if(preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"]))
{
	return false;	// serve the request resources as-is 
}
else
{
	//echo "<p>Welcome to PHP</p>";
	session_start();

	define('DEFAULT_CONTROLLER','home');
	define('DEFAULT_METHOD','index');

	require '../vendor/autoload.php';
	require '../App/Functions/functions_twig.php';
	require 'bootstrap/bootstrap.php';
}

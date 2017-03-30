<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('ADR_PATH', 'http://127.0.0.1/phpwebook/');
	/**
	 * Laod the model and the controllers
	 */
	require_once 'model'.DS.'dbconfig.php'; //OR require_once 'model/dbconfig.php';
	include 'controllers/controller.php';
	
	/**
	 * Load the view
	 */
	$control = new Controller();
	$page = $control->getCurrentPage();
	include 'views/'.$page;
	
?>
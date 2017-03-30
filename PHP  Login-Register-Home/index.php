<?php
	
	/**
	 * Laod the model and the controllers
	 */
	require_once 'model/dbconfig.php';
	include 'controllers/controller.php';
	
	/**
	 * Load the view
	 */
	$control = new Controller();
	$page = $control->getCurrentPage();
	include 'views/'.$page;
	
?>
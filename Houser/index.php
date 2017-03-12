<?php
	
	//include the logfile
	$file_path = "Admin/log_file_stream_activity.hsr";
	include("Admin/register_activity.php");
	fileWriteActivity( $file_path, "Opened welcome page" );
	
	// detection of the language for the current user
	$hs_user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	// if translation file for the specified language doesn't exist, we use default english file
	if (! file_exists('lang/' . $hs_user_lang . '.php')) {
		$hs_user_lang = 'en';
	}
	// save language as constant and include language translated strings
	define('SET_LANG', $hs_user_lang);
	include('lang/' . SET_LANG . '.php');
	//echo $SET_LANG['Database error'];
	
	// load the configuration file
	require_once("houser_core/houser.config.php");
	
	//get the view sent by the controller
	$get = "Houser_controller/controller.php";
	include( $get ); 
	
	/** get the pages sent by the controller and set the template */
	include( $squelette );
					 
?>
<?php
	
	//include the logfile
	$file_path = "../Admin/log_file_stream_activity.hsr";
	include("../Admin/register_activity.php");
	fileWriteActivity( $file_path, "Open gallery page" );
	
	// detection of the language for the current user
	$hs_user_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	// if translation file for the specified language doesn't exist, we use default english file
	if (! file_exists('../lang/' . $hs_user_lang . '.php')) {
		$hs_user_lang = 'en';
	}
	// save language as constant and include language translated strings
	define('SETLOGIN_LANG', $hs_user_lang);
	include('../lang/' . SETLOGIN_LANG . '.php');
	
	$control = "controller/controller.php";
	include($control);
	include("template/squelette.php");
	
	//throw new HttpNotFoundException;
?>
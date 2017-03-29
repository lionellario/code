<?php
	session_start();  
	session_unset();  
	session_destroy();
	header('Location: ../?gwd=tn_p');
	exit();
?>
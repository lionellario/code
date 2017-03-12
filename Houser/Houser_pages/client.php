<?php
	//session_start();
	$log = $_SESSION['hs_clt_name']; 
	$user = md5($log);
	/*$expire=time()+60*60*24*30;
	setcookie("user", $log, $expire);*/
	echo '<div id="int_div_login">';
		echo 'Welcome back '.$log.'<br/>';
		$so = "Sign out";
		$st = "leave";
	echo '</div>';
	/* the div is closed in the redirected page */
?>
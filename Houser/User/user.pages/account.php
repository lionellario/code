<?php
session_start();  
if (!isset($_SESSION['login'])) { 
   header ('Location: ../index.php'); 
   //exit();  
}  
else 
{ 
	$log = $_SESSION['login']; $user = md5($log);
	$expire=time()+60*60*24*30;
	setcookie("user", $log, $expire);
}
echo 'my space';
?>
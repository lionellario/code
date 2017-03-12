<?php
	ob_start();
	
	$squelette = "template/squelette.php";
	$pages = "user.pages/index.php";
	
	if(isset($_GET['action']))
	{
		$pages = "user.pages/".$_GET['action'].".php";
	}
?>
<?php
	$squelette = "template/squelette.php";
	$pages = "help.pages/help.php";
	
	if(isset($_GET['ans']))
	{
		$pages = "help.pages/".$_GET['ans'].".php";
	}
?>
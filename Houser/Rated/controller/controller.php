<?php
	$squelette = "template/squelette.php";
	$pages = "rated.pages/mostView.php";
	
	if(isset($_GET['query']))
	{
		$pages = "rated.pages/".$_GET['query'].".php";
	}
?>
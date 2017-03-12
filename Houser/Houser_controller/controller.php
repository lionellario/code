<?php
	$squelette = "template/squelette.php";
	$page = "Houser_pages/index.php";
	
	if( isset($_GET['query']) )
	{
		$page = "Houser_pages/".$_GET['query'].".php";
	}
	
?>
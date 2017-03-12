<?php
	
	$squelette = "template/squelette.php";
	$pages = "Gallery.pages/gallery.php";
	$ref="";
	
	if(isset($_GET['query']))
	{
		$pages = "Gallery.pages/quarterLoader.php";
	}
	
	if( isset($_GET['ref']) || isset($_GET['load']))
	{
		$pages = "ItemDetailsLoader.php";
	}
	
?>
<?php
	$skeleton = "template/skeleton.php";
	$page = "pages/index.php";
	
	if( isset($_GET['query']) )
	{
		$page = "pages/".$_GET['query'].".php";
	}
	
?>
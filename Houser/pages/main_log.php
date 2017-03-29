<?php
	require_once("../core/login.php");
	$lgin = new HsLogin();
	
	if( isset($_SESSION['hs_sel_id']) && !isset($_SESSION['hs_clt_id']) ) 
	{
		require("seller.php");
	}
	elseif( isset($_SESSION['hs_clt_id']) && !isset($_SESSION['hs_sel_id']) )
	{
		require("client.php");
	}
	else
	{
		require("logform.php");
	}
?>

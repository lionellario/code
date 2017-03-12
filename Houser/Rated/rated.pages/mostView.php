
<div id="DisplayCadreRAT">
<?php
	include("rated_handler.php");
	$new = new Rated;
	$new->getMostViewHouses( "localhost", "root", "", "houser" );
?>
</div>
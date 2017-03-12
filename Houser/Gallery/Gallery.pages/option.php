<?php
	
	$quer =  mysql_query("SELECT quater FROM gallery ORDER BY quater");
	
	echo '<form action="gotoLocation.cgi" method="post">
                        <select id="newLocation" class="selecteur">
                            <option selected="selected" class="SOption">Select a destination </option>';
	while( $row =  mysql_fetch_array($quer) )
		echo'<option value="?query='.$row["quater"].'" class="SOption">'.$row["quater"].'</option>';
	echo '</select>';
?>

<?php
	
	class User
	{
		/** This method get the announcements */
		public function getAnnonce( )
		{
			$quer =  mysql_query("SELECT code, reference, description, image, prix, attribut FROM annonce");

			while( $row =  mysql_fetch_array($quer) )
			{
				if( $row['attribut'] == "new" )
				{
					echo '<div id="announce">';
						echo '<a href="../Gallery/formulaire.php?query='.$row["code"].'-'.$row["reference"].'">';
						echo '<img width="235" height="145" style="padding-top:8px;" src="../Gallery/images/'.$row['image'].'" />';
						echo '</a>';
						echo '<p style="margin:0; padding:0;">'.$row['description'].'</p>';
						echo '<strong>'.htmlentities($row['prix']).'</strong>';
					echo '</div>';
				}
			}
		}//end of the method getAnnonce
		
	}//end of the class
	
?>
<?php		
	class Gallery
	{
		function selectHouse( )
		{
			$quer =  mysql_query("SELECT * FROM gallery");

			while( $row =  mysql_fetch_array($quer) )
			{
				if( $row['domain'] == "terrain" )
				{
					include("file/selectTerrain.ini.php");
				}
				else
				{
					include("file/selectHouse.ini.php");
				}
			} //end of the while loop
		}//end of the mothod selectHouse()
		
		/*this method select a specific house according to the quater*/
		function selectSpecificHouse( $name )
		{
			
			$quer =  mysql_query("SELECT * FROM gallery WHERE quater='$name'");

			while( $row =  mysql_fetch_array($quer) )
			{
				if( $row['domain'] == "terrain" )
				{
					include("file/selectSpecificTerrain.ini.php");
				}
				else
				{
					include("file/selectSpecificHouse.ini.php");
				}
			} //end of the while loop
			
		}//end of the method selectSpecificHouse()
		
		/** This method check if the reference of a house is correct or not */
		public function checkReference( $ref )
		{
			$quer =  mysql_query("SELECT reference FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return 1;
			else
				return 0;
		} //end of the method checkReference
		
		/** This method check if the reference of a house is correct or not */
		public function checkCodeReference( $cod, $ref )
		{
			$quer =  mysql_query("SELECT reference, code FROM gallery WHERE reference='$ref' AND code='$cod'");

			if( $row =  mysql_fetch_array($quer) )
				return 1;
			else
				return 0;
		} //end of the method checkReference
		
		/** This method check if the code of a house is correct or not */
		public function checkCode( $cod )
		{
			$quer =  mysql_query("SELECT code FROM gallery WHERE code='$cod'");

			if( $row =  mysql_fetch_array($quer) )
				return 1;
			else
				return 0;
		} //end of the method checkCode
		
		/** This method check if the domain of a house is correct or not */
		public function checkType( $ref )
		{
			$quer =  mysql_query("SELECT reference, domain FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['domain'];
			else
				return " ";
		} //end of the method checkReference
		
		/** This method get the image of the house and return it */
		public function getItemImage( $ref )
		{
			$quer =  mysql_query("SELECT reference, image FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['image'];
		}//end of the method getHouseImage
		
		/** This method get the town of the house and return it */
		public function getItemTown( $ref )
		{
			$quer =  mysql_query("SELECT reference, ville FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['ville'];
		}//end of the method getItemTown
		
		/** This method get the town of the house and return it */
		public function getItemQuater( $ref )
		{
			$quer =  mysql_query("SELECT reference, quater FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['quater'];
		}//end of the method getItemTown
		
		/** This method get the town of the house and return it */
		public function getItemType( $ref )
		{
			$quer =  mysql_query("SELECT reference, domain FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['domain'];
		}//end of the method getItemTown
		
		/** This method get the town of the house and return it */
		public function getItemAddress( $ref )
		{
			$quer =  mysql_query("SELECT reference, address FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['address'];
		}//end of the method getItemTown
		
		/** This method get the town of the house and return it */
		public function getItemRoom( $ref )
		{
			$quer =  mysql_query("SELECT reference, rooms FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['rooms'];
		}//end of the method getItemTown
		
		/** This method get the town of the house and return it */
		public function getItemSurface( $ref )
		{
			$quer =  mysql_query("SELECT reference, surface FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['surface'];
		}//end of the method getItemTown
		
		/** This method get the image of the house and return it */
		public function getItemDescription( $ref )
		{
			$quer =  mysql_query("SELECT reference, description FROM apart WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['description'];
		}//end of the method getHouseDescription
		
		/** This method get the price of the house and return it */
		public function getItemPrice( $ref )
		{
			$quer =  mysql_query("SELECT reference, prix FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['prix'];
		}//end of the method getHousePrice
		
		/** This method get the etiquette of the house and return it */
		public function getItemEtq( $ref )
		{
			$quer =  mysql_query("SELECT reference, etiquette FROM gallery WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
				return $row['etiquette'];
		}//end of the method getHouseEtq
		
		/** This method get the announcements */
		public function getAnnonce( )
		{
			$quer =  mysql_query("SELECT code, reference, description, image, prix, attribut FROM annonce");

			while( $row =  mysql_fetch_array($quer) )
			{
				if( $row['attribut'] == "new" )
				{
					echo '<div id="announce">';
						echo '<a href="formulaire.php?query='.$row["code"].'-'.$row["reference"].'">';
						echo '<img width="235" height="145" style="padding-top:8px;" src="images/'.$row['image'].'" />';
						echo '</a>';
						echo '<p style="margin:0; padding:0;">'.$row['description'].'</p>';
						echo '<strong>'.htmlentities($row['prix']).'</strong>';
					echo '</div>';
				}
			}
		}//end of the method getAnnonce
		
		public function getImageDetails( $ref )
		{
			$quer =  mysql_query("SELECT code, reference, img_details FROM image_details WHERE reference='$ref'");

			if( $row =  mysql_fetch_array($quer) )
			{
				return $row['img_details'];
			}
		}//end of the method getImageDetails
		
		public function imageDetailArray( $ref )
		{
			$string = $this->getImageDetails( $ref );
			return $string;
		}
		
		public function test( )
		{
			echo "Connection ok, linked to ";
		}
		
		/** this method input the option of quater*/
		function echoOption( )
		{
			$quer =  mysql_query("SELECT quater FROM gallery ORDER BY quater");

			while( $row =  mysql_fetch_array($quer) )
				echo' <option value="index.php?query='.$row["quater"].'">'.$row["quater"].'</option>';
		}//end of the method echoOption()
		
	}//end of the class
	
?>
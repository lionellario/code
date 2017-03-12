<?php

	//Recall the configuration file
	require_once("houser.config.php");
	
	//setting 
	class DBConnector
	{
		private $hostName;
		private $userName;
		private $password;
		private $dbsename;
		function __construct( /*$host, $user, $pass, $dbn*/ )
		{
			$this->hostName = DBS_HOST;
			$this->userName = DBS_USER;
			$this->password = DBS_PASS;
			$this->dbsename = DBS_NAME;
		}
		
		function getHostName()
		{
			return $this->hostName;
		}
		
		function getUserName()
		{
			return $this->userName;
		}
		
		function getPassword()
		{
			return $this->password;
		}
		
		function getDbName()
		{
			return $this->dbsename;
		}
		
		function makeTheConnection()
		{
			mysql_connect( $this->getHostName(), $this->getUserName(), $this->getPassword() ) 
							or mysql_error($SET_LANG['Host error'] );
							
			mysql_select_db( $this->getDbName() ) or mysql_error($SET_LANG['Database error']);
		}
		
		public function getAnnonce( )
		{
			$quer =  mysql_query("SELECT code, reference, description, image, prix, attribut FROM annonce");
	
			while( $row =  mysql_fetch_array($quer) )
			{
				if( $row['attribut'] == "new" )
				{
					echo '<div id="announce">';
						echo '<a href="Gallery/formulaire.php?query='.$row["code"].'-'.$row["reference"].'">';
						echo '<img src="Gallery/images/'.$row['image'].'" />';
						echo '</a>';
						echo '<p style="margin:0; padding:0;">'.$row['description'].'</p>';
						echo '<strong>'.htmlentities($row['prix']).'</strong>';
					echo '</div>';
				}
			}
		}//end of the method getAnnonce
	}

?>
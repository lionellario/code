<?php

	//Recall the configuration file
	require_once("config.php");
	
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
		
	}

?>
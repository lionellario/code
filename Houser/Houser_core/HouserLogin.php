<?php

/**
 * handles the user login/logout/session
 */
	class HsLogin
	{
	
		 /**
		  * @var object $db_connection The database connection
		  */
		private $db_connection = null;
		/**
		 * @var array with translation of language strings
		 */
		private $lang = array();
		/**
		 * @var int $user_id The user's id
		 */
		private $user_id = null;
		/**
		 * @var string $user_name The user's name
		 */
		private $user_name = "";
		/**
		 * @var string $user_email The user's mail
		 */
		private $user_email = "";
		/**
		 * @var boolean $sel_is_logged_in The user's login status
		 */
		private $sel_is_logged_in_hs = false;
		/**
		 * @var boolean $clt_is_logged_in The user's login status
		 */
		private $clt_is_logged_in_hs = false;
		/**
		 * @var boolean $password_reset_link_is_valid Marker for view handling
		 */
		private $password_reset_link_is_valid  = false;
		/**
		 * @var boolean $password_reset_was_successful Marker for view handling
		 */
		private $password_reset_was_successful = false;
		/**
		 * @var array $errors Collection of error messages
		 */
		public $errors = array();
		/**
		 * @var array $messages Collection of success / neutral messages
		 */
		public $messages = array();
	
		function __construct()
		{	
	
			// create/read session
			session_start();
		
			// TODO: @devplanete: This should be $_GLOBALS !!?!?!?!?!?!
			$this->lang = & $GLOBALS['SET_LANG'];
		
			/** check the possible login actions:
			// 1. logout (happen when user clicks logout button)
			// 2. login via session data (happens each time user opens 
				  a page on your php project AFTER he has successfully 
				  logged in via the login form)
			// 3. login via cookie
			// 4. login via post data, which means simply logging in via 
				  the login form. after the user has submit his login/password 
				  successfully, his logged-in-status is written into his session 
				  data on the server. this is the typical behaviour of common login scripts.
			 */
		
			// if user tried to log out
			if (isset($_GET["logout"])) 
			{
				$this->doLogout();
			}
			// if user as seller, has an active session on the server
			elseif (!empty($_SESSION['hs_sel_name']) && ($_SESSION['sel_logged_in_hs'] == 1)) 
			{
				$this->loginWithSessionDataAsSeller();
				
			}
			// if user as client, has an active session on the server
			elseif (!empty($_SESSION['hs_clt_name']) && ($_SESSION['clt_logged_in_hs'] == 1)) 
			{
				$this->loginWithSessionDataAsClient();
				
			} 
			// login with cookie
			elseif (isset($_COOKIE['rememberme'])) 
			{
				$this->loginWithCookieData();
			} 
			// if user just submitted a login form
			elseif (isset($_POST["login"])) 
			{
				$this->loginWithPostData($_POST['user_name'], $_POST['user_password'], $_POST['user_rememberme']);
			}
		}//end of the default constructor
		
		/**
		 * Logs in with S_SESSION data.
		 */
		function loginWithSessionDataAsSeller()
		{
			$this->user_name = $_SESSION['hs_sel_name'];
			$this->user_email = $_SESSION['hs_sel_email'];
			//echo "Seller";
			
			// set logged in status to true
			$this->sel_is_logged_in_hs = true;
			
		}//end the method loginWithSessionDataAsSeller()
		
		/**
		 * Logs in with S_SESSION data.
		 */
		function loginWithSessionDataAsClient()
		{
			$this->user_name = $_SESSION['hs_clt_name'];
			$this->user_email = $_SESSION['hs_clt_email'];
			//echo "Client";
	
			// set logged in status to true
			$this->clt_is_logged_in_hs = true;
			
		}//end the method loginWithSessionDataAsClient()
		
		 /**
		 * Logs in with the data provided in $_POST, coming from the login form
		 * @param $user_mail
		 * @param $user_password
		 * @param $user_choice
		 * @param $user_rememberme
		 */
		function loginWithPostData($user_email, $user_password, $choice)
		{
			/*, $user_rememberme*/
			//initial value
			$request = $choice;
			
			//check if visitor submited a login form
			
			//check up of a seller which number 1
			if( $request == 1 ) 
			{
				if( ( isset($user_email) && !empty($user_email) ) && ( isset($user_password) && !empty($user_password) ) ) 
				{ 
					//check if email and password are in the database
					$sql = "SELECT * FROM registers WHERE email= '$user_email' AND password = '$user_password'"; 
					$reqt = mysql_query($sql);
				  
					// if yes, then this is a valid user and create session
					if (mysql_num_rows($reqt) == 1)
					{ 
						$row = mysql_fetch_array($reqt);
						
						//Enable user session 
						session_start();
						
						// write user data into PHP SESSION [a file on your server]
						$_SESSION['hs_sel_id'] = $row['id'];
						$_SESSION['hs_sel_name'] = $row['fname'];
						$_SESSION['hs_sel_email'] = $row['email'];
						$_SESSION['sel_logged_in_hs'] = 1;
		
						// declare user id, set the login status to true
						$this->user_id = $row['id'];
						$this->user_name = $row['fname'];
						$this->user_email = $row['email'];
						$this->sel_is_logged_in_hs = true;
						
						header("location: ?gwd=tn_p");
						exit();
						
					} 
					// if no, then there might be a typing error either in the email or the password
					elseif (mysql_num_rows($reqt) == 0) 
					{
						echo "<br/>";
							echo '<div id="errcrt"><h5>'; 
							echo  $this->lang['Bad login'];
						echo '</h5></div>';
					} 
					// or there might be a problem in the database
					else { 
						$erreur = "Sorry, we cannot identify this user."; 
					} 
				} 
				else {
					echo "<br/>";
						echo '<div id="errcrt">
								<h5>'.$this->lang['Empty field'].'</h5>
							</div>'; 
				} 
			}
			
			//check up of a client which number 2
			
			elseif( $requet == 2 ) 
			{
				if( ( isset($user_email) && !empty($user_email) ) && ( isset($user_password) && !empty($user_password) ) ) 
				{ 
					//check if email and password are in the database
					$sql = "SELECT * FROM registers WHERE email= '$user_email' AND password = '$user_password'"; 
					$reqt = mysql_query($sql);
				  
					// if yes, then this is a valid user and create session
					if (mysql_num_rows($reqt) == 1)
					{ 
						$row = mysql_fetch_array($reqt);
						
						// write user data into PHP SESSION [a file on your server]
						$_SESSION['hs_clt_id'] = $row['id'];
						$_SESSION['hs_clt_name'] = $row['fname'];
						$_SESSION['hs_clt_email'] = $row['email'];
						$_SESSION['clt_logged_in_hs'] = 1;
		
						// declare user id, set the login status to true
						$this->user_id = $row['id'];
						$this->user_name = $row['fname'];
						$this->user_email = $row['email'];
						$this->clt_is_logged_in_hs = true;
						
						header("location: ?gwd=tn_p");
						exit();
					}	 
					// if no, then there might be a typing error either in the email or the password
					elseif (mysql_num_rows($reqt) == 0) {
						echo "<br/>";
						echo '<div id="errcrt"><h5>'; 
							echo  $this->lang['Bad login'];
						echo '</h5></div>';
					} 
					// or there might be a problem in the database
					else { 
						$erreur = "Sorry, we cannot identify this user."; 
					} 
				} 
				else {
					echo "<br/>";
					echo '<div id="errcrt">
							<h5>'.$this->lang['Empty field'].'</h5>
							</div>'; 
				} 
			}
			else
			{
				echo "False request";
			}
			
		}//end of the method loginWithPostData()
			
	}//end of the class

?>
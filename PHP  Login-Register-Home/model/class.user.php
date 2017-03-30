<?php

    class User {
        protected $db;
        protected $errors = array();
        
        function __construct($DB_con){
          
            $this->db = $DB_con;
        }
		
		public function getErrorMessage() {
			return $this->errors;
		} 
        /*
         * @Param VARCHAR $firstname, user firt name
         * @Param VARCHAR $lastName, user last name
         * @Param VARCHAR $email, user email
         * @Param VARCHAR $password, user password
		 
         * @Return query response
         */
        public function register($firstName, $lastName, $email, $password){   
            
            /*
             * Check if account email exist
             */
            if(isAccount($email)) {
                $this->errors [] = "It seems you already have an account with us. Please log in <a>here</a>.";
                return false;
            }
			
			//encode the password
            $pass = password_hash($password, PASSWORD_DEFAULT);
            try {
               
                $stmt = $this->db->prepare("INSERT INTO dw_users_data(fname, lname, email, password, date, activated, deleted) VALUES(:ufname, :ulname, :ueml, :upass, :adate, :act, :del)");

                $stmt->bindparam(":ufname", $firstName);
                $stmt->bindparam(":ulname", $lastName);
                $stmt->bindparam(":ueml", $email);
                $stmt->bindparam(":upass", $pass);
                $stmt->bindparam(":adate", now()); //Timestamp
				$stmt->bindparam(":act", 1);
				$stmt->bindparam(":del", 0);
                
                $stmt->execute(); 

                return $stmt; 
            }
            catch(PDOException $e) {
                $this->errors[] = "Account cannot be created";
                echo $e->getMessage();
            }    
        }

        /*
         * @Param $uemail
         * @Param $upass
         * @Return query response
         */
        public function login($umail,$upass){
            
            try {
                
                $stmt = $this->db->prepare("SELECT * FROM dw_users_data WHERE email=:ueml AND deleted='0' LIMIT 1");
                $stmt->execute(array(':ueml'=>$umail));
                $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
                
                if($stmt->rowCount() > 0 && password_verify($upass, $userRow['password'])) {
                    
					//Account not yet activated
					if(!$this->isActivated($umail)){
						$this->errors[] = "Your Account is not Activated. Please follow the link sent via your email to activate your account";
						return false;
					}
					else {
						$_SESSION['user_session'] = $userRow['user_id'];
						return true;
					}
                }
                else {
                    $this->errors[] = "Username or Password incorrect, please check your credentials again";
                    return false;
                }
                
            }
            catch(PDOException $e){
               
                echo $e->getMessage();
            }
        }

		public function is_loggedin()
		{
			if(isset($_SESSION['user_session'])) {
				return true;
			}
		}

		public function redirect($url)
		{
			header("Location: $url");
		}

		public function logout() {
            session_destroy();
            unset($_SESSION['user_session']);
            return true;
        }
        
		/*
         * Check if email exists
         * If email exists and account is not deleted, return true
         * else return false
         */
        public function isAccount($eml) {
            
             try {
                $stmt = $this->db->prepare("SELECT * FROM dw_users_data WHERE email=:ueml AND deleted='0' LIMIT 1");
                $stmt->execute(array(':ueml'=>$eml));
                
                if($stmt->rowCount() > 0) {
                    return true;
                }
                else {
                    return false;
                }
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
		
        public function isActivated($eml) {
            
            try {
                $stmt = $this->db->prepare("SELECT * FROM dw_users_data WHERE email=:ueml AND activated='1' LIMIT 1");
                $stmt->execute(array(':ueml'=>$eml));
                
                if($stmt->rowCount() > 0) {
                    return true;
                }
                else {
                    return false;
                }
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
    
?>
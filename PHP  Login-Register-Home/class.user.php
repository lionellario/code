<?php

    class User {
        protected $db;
        protected $errors = array();
        
        function __construct($DB_con){
          
            $this->db = $DB_con;
        }

        /*
         * @Param VARCHAR $firstname, user firt name
         * @Param VARCHAR $lastName, user last name
         * @Param VARCHAR $email, user email
         * @Param VARCHAR $password, user password
		 
         * @Return query response
         */
        public function register($firstName, $lastName, $email, $password){   
            
            //encode the password
            $pass = password_hash($password, PASSWORD_DEFAULT);
            try {
               
                $stmt = $this->db->prepare("INSERT INTO dw_users_data(fname, lname, email, password, date) VALUES(:ufname, :ulname, :ueml, :upass, :adate)");

                $stmt->bindparam(":ufname", $firstName);
                $stmt->bindparam(":ulname", $lastName);
                $stmt->bindparam(":ueml", $email);
                $stmt->bindparam(":upass", $pass);
                $stmt->bindparam(":adate", now()); //Timestamp
                
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
           
            //Account not yet activated
            /*if(!isActivated()){
                $this->errors[] = "Account not Activated. Please follow the link sent via email to activate your account";
                return false;
            }*/
            
            try {
                
                $stmt = $this->db->prepare("SELECT * FROM dw_users_data WHERE email=:ueml AND deleted='0' LIMIT 1");
                $stmt->execute(array(':ueml'=>$umail));
                $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
                
                if($stmt->rowCount() > 0 && password_verify($upass, $userRow['password'])) {
                    $_SESSION['user_session'] = $userRow['user_id'];
                    return true;
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
<?php

	if($user->is_loggedin()!=""){
		
		$user->redirect('home.php');
	}

	if(isset($_POST['btn-signup'])){
	   
		$ufname = trim($_POST['txt_ufname']);
		$ufname = trim($_POST['txt_ulname']);
		$umail = trim($_POST['txt_umail']);
		$upass = trim($_POST['txt_upass']);
		$upasscfm = trim($_POST['txt_upass_cfm']);		
	 
		if($ufname=="") {
		  
			$error[] = "provide username !"; 
		}
		else if($ufname=="") {
		  
			$error[] = "provide username !"; 
		}
		else if($umail=="") {
		  
			$error[] = "provide email id !"; 
		}
		else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
		  
			$error[] = 'Please enter a valid email address !';
		}
		else if($upass=="") {
		  
			$error[] = "provide password !";
		}
		else if($upass!=$upasscfm) {
		  
			$error[] = "provide password !";
		}
		else if(strlen($upass) < 6){
		  
			$error[] = "Password must be atleast 6 characters"; 
		}
		else
		{
			try{
			
				$stmt = $DB_con->prepare("SELECT * FROM dw_users_data WHERE email=:ueml AND deleted='0' LIMIT 1");
				$stmt->execute(array(':ueml'=>$eml));
				$row=$stmt->fetch(PDO::FETCH_ASSOC);
		
				if($row['email']==$eml) {
					$error[] = 'It seems you already have an account with us. Please log in <a href="index.php?redirect">here</a>.';
				}
				else{
				
					if($user->register($fname,$lname,$umail,$upass)) 
					{
						$user->redirect('register.php?joined');
					}
				}
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		} 
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sign up</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
		<link rel="stylesheet" href="css/style.css" type="text/css"  />
	</head>
	<body>
		<div class="container">
			<div class="form-container">
				<form method="post">
					<h2>Sign up.</h2>
					<?php
						if(isset($error)){
					   
							foreach($error as $error){
					?>
								<div class="alert alert-danger">
									<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
								</div>
					<?php
							}
						}
						else if(isset($_GET['joined'])){
					?>
							<div class="alert alert-info">
								<i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
							</div>
					<?php
						}
					?>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_uname" placeholder="First name" value="<?php if(isset($error)){echo $ufname;}?>" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_uname" placeholder="Last name" value="<?php if(isset($error)){echo $ulname;}?>" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_umail" placeholder="Email" value="<?php if(isset($error)){echo $umail;}?>" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="txt_upass" placeholder="Your password" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="txt_upass_cfm" placeholder="Confirm password" />
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary" name="btn-signup">
							<i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
						</button>
					</div>
					<br />
					<label>have an account ! <a href="index.php">Sign In</a></label>
				</form>
			</div>
		</div>

	</body>
</html>
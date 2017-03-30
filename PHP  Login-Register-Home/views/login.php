<?php
	$error = array();
	
	if(isset($_GET['logout']) && $_GET['logout'] == true) {
			if($user->logout()){
				$user->redirect('index.php?logged_out');
		}
	}
	
	if($user->is_loggedin() == true){
	 
		$user->redirect('home.php');
	}

	if(isset($_POST['btn-login'])){
		
		$umail = $_POST['txt_uname_email'];
		$upass = $_POST['txt_password'];
	  
		if($user->login($umail,$upass)){
	  
			$user->redirect('home.php');
		}
		else{
			$error = $user->getErrorMessage();
		} 
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
		<link rel="stylesheet" href="css/style.css" type="text/css"  />
	</head>
	<body>
		<div class="container">
			<div class="form-container">
				<form method="post">
					<h2>Sign in.</h2>
					<?php
						if(isset($error)){
					?>
							<div class="alert alert-danger">
								<i class="glyphicon glyphicon-warning-sign" style="color:red; font-size:13px;"><?php foreach($error AS $e){echo $e."<br/>";} ?></i>
							</div>
					<?php
						}
					?>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_uname_email" placeholder="Email" required />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<button type="submit" name="btn-login" class="btn btn-block btn-primary">
							<i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
						</button>
					</div>
					<br />
					<label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
				</form>
			</div>
		</div>

	</body>
</html>
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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Login</title>
		<!-- Bootstrap core CSS -->
		<link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo ADR_PATH; ?>css/style.css" type="text/css"  />
	</head>
	<body>
		<div class="container">
			<div class="form-container">
				<form method="post">
					<h2>Sign in.</h2>
					<?php
						if(isset($error) && sizeof($error) > 0){
					?>
							<div class="alert alert-danger">
								<i class="glyphicon glyphicon-warning-sign" style="color:red; font-size:13px;"></i>
								<?php foreach($error AS $e){echo $e."<br/>";} ?>
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
					<label>Don't have account yet ! <a href="register">Sign Up</a></label>
				</form>
			</div>
		</div>

	</body>
</html>
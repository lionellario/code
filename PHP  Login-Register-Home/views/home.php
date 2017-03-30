<?php
	
	if(!$user->is_loggedin()){
	 
		$user->redirect('home?login');
	}
	$user_id = $_SESSION['user_session'];
	$stmt = $DB_con->prepare("SELECT * FROM dw_users_data WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
		<link rel="stylesheet" href="css/style.css" type="text/css"  />
		<title>welcome - <?php print($userRow['fname']); ?></title>
	</head>

	<body>

		<div class="header">
			<div class="left">
				<label><a href="https://github.com/lionellario/code">Sample Login-register-home in PHP</a></label>
			</div>
			<div class="right">
				<label><a href="index.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
			</div>
		</div>
		<div class="content">
			welcome : <?php print($userRow['fname']); ?>
		</div>
		
	</body>
</html>
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
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Bootstrap core CSS -->
		<link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo ADR_PATH; ?>css/style.css" type="text/css"  />
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
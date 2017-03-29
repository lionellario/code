<?php
	include_once 'dbconfig.php';
	if(!$user->is_loggedin()){
	 
		$user->redirect('index.php');
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
		integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
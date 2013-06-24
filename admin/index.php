<?php
	session_start();
	if($_SESSION['isloggedin']=='loggedin' && $_SESSION['user_type']=='admin'){
		header('location:dashboard.php');
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Neat Admin Template</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body class='login_body'>
	<div class="wrap">
		<h2>Administration area</h2>
		<h4>Welcome to the login page</h4>
		<form action="adminloginaction.php"  autocomplete="off" method="post" id="admin_login">
		<div class="login">
			<div class="email">
				<label for="user">Email</label><div class="email-input"><div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="email" required id="email" name="email"></div></div>
			</div>
			<div class="pw">
				<label for="pw">Password</label><div class="pw-input"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="password" required id="password" name="password"></div></div>
			</div>
		</div>
		<div class="submit">
			<a href="#">Lost password?</a>
			<input type="submit" class="btn btn-red5" onclick="return validateLogin()" value="Login">
		</div>
		</form>
	</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/validations.js"></script>
</body>
</html>
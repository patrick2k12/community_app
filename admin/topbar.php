<?php
	session_start();
	if($_SESSION['isloggedin']!='loggedin'){
		unset($_SESSION);
		header('location:index.php');
		die;
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome Administrator</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
require_once('database/db.php');
?>
<div class="style-toggler">
	<img src="img/icons/fugue/color.png" alt="" class='tip' title="Toggle style-switcher" data-placement="right">
</div>					
<div class="style-switcher">
	<h3>Style-switcher</h3>
	<ul>
		<li>
			<a href="#" class='style'>Default</a>
		</li>
		<li>
			<a href="#" class='blue'>Blue</a>
		</li>
		<li>
			<a href="#" class='green'>Green</a>
		</li>
		<li>
			<a href="#" class='red'>Red</a>
		</li>
	</ul>
</div>
<div class="topbar">
	<div class="container-fluid">
		<a href="dashboard.php" class='company'>Welcome Administrator</a>
		<form action="#">
			<input type="text" value="Search here...">
		</form>
		<ul class='mini'>
			<li>
				<a href="logout.php">
					<img src="img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="dashboard.php"><i class="icon-home icon-white"></i></a>
			</li>
			<li>
				<a href="dashboard.php">
					Dashboard
				</a>
			</li>
		</ul>

	</div>
</div>
<?php
	require_once('database/db.php');
	$email			=	 trim($_POST['email']);
	$pass			=	trim($_POST['password']);
	$password		=	md5($pass);
	$query			=	"select user_type,email,first_name,last_name from comm_users where email='".mysql_real_escape_string($email)."' and password='".mysql_real_escape_string($password)."'
						and status=1 and user_type='admin'";
	$result			=	mysql_query($query);
	$userInfo		=	mysql_fetch_array($result);
	if(count($userInfo)>0){
		//Username and password are authencated.
		session_start();
		$_SESSION['isloggedin']					=	'loggedin';
		$_SESSION['first_name']					=	$userInfo['first_name'];
		$_SESSION['last_name']					=	$userInfo['last_name'];
		$_SESSION['user_email']					=	$userInfo['email'];
		$_SESSION['user_type']					=	$userInfo['user_type'];
	}
	if($_SESSION['isloggedin']=='loggedin' && $_SESSION['user_type']=='admin'){
		header('Location:dashboard.php');
	}
?>
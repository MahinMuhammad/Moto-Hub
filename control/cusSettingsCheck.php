<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}
	$user['email'] = $_COOKIE['status'];

	$user['emailNew'] = $_POST['email'];
	$user['name'] = $_POST['name'];

	require_once "../model/userModel.php";

	if($user['emailNew'] == null || $user['name'] == null)
	{
		echo '<h1>Name or Email can not be empty!!!</h1>';
		echo'<br><a href="../view/cusSettings.php"> Go Back </a>';
	} 
	else
	{
		if(updateRow($user))
		{
			setcookie('status', $user['emailNew'], time()+3600, '/');
			header('location: ../view/customerHome.php');
		}
		else
		{
			echo '<h1>Database Error!!!</h1>';
		echo'<br><a href="../view/cusSettings.php"> Go Back </a>';
		}
	}
?>
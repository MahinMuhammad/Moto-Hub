<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}
	$user['email'] = $_COOKIE['status'];

	$user['emailNew'] = $_POST['email'];
	$user['name'] = $_POST['name'];

	require_once "../model/userModel.php";

	if(updateRow($user))
	{
		setcookie('status', $user['emailNew'], time()+3600, '/');
	}
	else
	{
		echo 'Failed';
	}
?>
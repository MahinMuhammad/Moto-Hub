<?php 
	$user['email'] = $_POST['email'];
	$user['pass'] = $_POST['password'];
	$user['username'] = $_POST['name'];
	$user['userType'] = $_POST['userType'];

	require_once "../model/userModel.php";

	if(reg($user))
	{
		echo '../view/login.html';
	}
	else
	{
		echo 'Failed';
	}
?>
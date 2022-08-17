<?php 
	$user['email'] = $_POST['email'];
	$user['pass'] = $_POST['password'];
	$user['username'] = $_POST['name'];
	$user['userType'] = $_POST['userType'];
	$user['phone'] = $_POST['phone'];
	$user['dob'] = $_POST['dob'];
	$user['gender'] = $_POST['gender'];
	$user['address'] = $_POST['address'];

	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

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
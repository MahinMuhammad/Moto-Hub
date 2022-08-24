<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}

	$json = $_POST['data'];
	$useObj = json_decode($json);

	$user['email'] = $_COOKIE['status'];

	$user['emailNew'] = $useObj->email;
	$user['name'] = $useObj->name;
	$user['gender'] = $useObj->gender;
	$user['phone'] = $useObj->phone;
	$user['address'] = $useObj->address;
	$user['dob'] = $useObj->dob;

	require_once "../model/userModel.php";

	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

	if(updateRow($user))
	{
		setcookie('status', $user['emailNew'], time()+3600, '/');
	}
	else
	{
		echo 'Failed';
	}
?>
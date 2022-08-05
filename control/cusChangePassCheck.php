<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $user['email'] = $_COOKIE['status'];

	$user['pass'] = $_POST['password'];
	$user['passNew'] = $_POST['passwordNew'];

	require_once "../model/userModel.php";

	if(updatePass($user))
	{
		echo '../view/customerHome.php';
	}
	else
	{
		echo 'WRONGPASS';
	}
?>
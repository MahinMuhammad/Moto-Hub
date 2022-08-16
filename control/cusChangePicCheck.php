<?php

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }

    $user['email'] = $_COOKIE['status'];

	$tmp_name  = $_FILES['myfile']['tmp_name'];


	$fp = fopen($tmp_name, 'rb');
	$file_content = file_get_contents($tmp_name);
	fclose($fp);

	$encoded = base64_encode($file_content);

	require_once "../model/userModel.php";

	if(setProPic($user, $encoded))
	{
		header('location: ../view/cusProfile.php');
	}
	else
	{
		echo 'DATABASE ERROR';
	}
?>
<?php

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }

    require_once "../model/userModel.php";

    $user['email'] = $_COOKIE['status'];

	$tmp_name  = $_FILES['myfile']['tmp_name'];


	if($tmp_name != null)
	{
		$fp = fopen($tmp_name, 'rb');
		$file_content = file_get_contents($tmp_name);
		fclose($fp);

		$encoded = base64_encode($file_content);

		if(setProPic($user, $encoded))
		{
			header('location: ../view/cusProfile.php');
		}
		else
		{
			echo 'DATABASE ERROR';
		}
	}
	else
	{
		if(setProPic($user, "DEFAULT"))
		{
			header('location: ../view/cusProfile.php');
		}
		else
		{
			echo 'DATABASE ERROR';
		}
	}
	
?>
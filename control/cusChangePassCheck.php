<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $user['email'] = $_COOKIE['status'];

	$user['pass'] = $_POST['password'];
	$user['passNew'] = $_POST['passwordNew'];
	$user['passConf'] = $_POST['passwordConf'];

	require_once "../model/userModel.php";

	if($user['pass'] == null || $user['passNew'] == null || $user['passConf'] == null)
	{
		echo '<h1>Empty Field!!!</h1>';
		echo'<br><a href="../view/cusChangePass.php"> Go Back </a>';
	}
	else
	{
		if($user['passNew'] == $user['passConf'])
		{
			if(updatePass($user))
			{
				header('location: ../view/customerHome.php');
			}
			else
			{
				echo '<h1>Wrong Current Password!!!</h1>';
				echo'<br><a href="../view/cusChangePass.php"> Go Back </a>';
			}
		}
		else
		{
			echo '<h1>Input New Password Twice Correctly!!!</h1>';
			echo'<br><a href="../view/cusChangePass.php"> Go Back </a>';
		}
	}

?>
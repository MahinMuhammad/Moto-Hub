<?php 
	session_start();

	$userEmail = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	$userName = $_POST['name'];
	$userType = $_POST['userType'];

	if($userEmail == null || $password == null || $passwordConf == null || $userType == null || $userName == null){
		echo "no field can be empty or options unchecked";
	}else{

		if($password == $passwordConf)
		{
			$user = $userEmail."|".$password."|".$userName."|".$userType."\r\n";
			$file = fopen('user.txt', 'a');
			fwrite($file, $user);

			header('location: login.html');
		}
		else
		{
			echo "Password confirmation failed!";
		}

	}


?>
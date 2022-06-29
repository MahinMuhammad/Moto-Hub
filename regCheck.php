<?php 
	$userEmail = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];
	$userName = $_POST['name'];
	$userType = $_POST['userType'];

	if($userEmail == null || $password == null || $passwordConf == null || $userType == null || $userName == null){
		echo '<h1>Empty Field!!!</h1>';
		echo'<br><a href="reg.html"> Go Back </a>';
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
			echo '<h1>Password confirmation failed!!!</h1>';
			echo'<br><a href="reg.html"> Go Back </a>';
		}

	}
?>
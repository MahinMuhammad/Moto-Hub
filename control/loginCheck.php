<?php 
	$user['email'] = $_POST['email'];
	$user['pass'] = $_POST['password'];

	require_once "../model/userModel.php";

	if(login($user))
	{
		setcookie('status', $user['email'], time()+3600, '/');
		
		switch (getRow($user)['UserType']) 
		{
			case "Customer":
				header('location: ../view/customerHome.php');
				break;

			case "Seller":
				header('location: ../view/sellerHome.php');
				break;

			case "Service-Man":
				header('location: ../view/serviceManHome.php');
				break;

			case "Admin":
				header('location: ../view/adminHome.php');
				break;
			
			default:
				echo "user type not found!";
				break;
		}
	}
	else
	{
		echo '<h1>Invalid user!!!</h1>';
		echo'<br><a href="../view/login.html"> Go Back </a>';
	}
?>
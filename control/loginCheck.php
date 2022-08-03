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
				echo '../view/customerHome.php';
				break;

			case "Seller":
				echo '../view/sellerHome.php';
				break;

			case "Service-Man":
				echo '../view/serviceManHome.php';
				break;

			case "Admin":
				echo '../view/adminHome.php';
				break;
			
			default:
				echo "Wrong";
				break;
		}
	}
	else
	{
		echo "Invalid";
	}
?>
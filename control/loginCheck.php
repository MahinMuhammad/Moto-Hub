<?php 
	// $user['email'] = $_POST['email'];
	// $user['pass'] = $_POST['password'];

	$json =$_POST['data'];
	$userObj = json_decode($json);
	$user['email'] = $userObj->email;
	$user['pass'] = $userObj->pass;

	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

	require_once "../model/userModel.php";

	if(login($user))
	{
		setcookie('status', $userObj->email, time()+3600, '/');
		
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
				echo '../view/AdminDash.php';
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
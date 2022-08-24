<?php  

	if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
	
	$service['service_id'] = $_POST['service_id'];
	$service['email'] = $_COOKIE['status'];

	require_once "../model/userModel.php";

	if(requestService($service))
	{
		echo 'DONE';
	}
	else
	{
		echo 'WRONG';
	}
?>
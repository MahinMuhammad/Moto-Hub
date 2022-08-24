<?php  

	if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
	
	$Service['service_id'] = $_POST['service_id'];
	$Service['email'] = $_COOKIE['status'];
	
	require_once "../model/userModel.php";

	if(searchServiceInDB($Service))
	{
		echo 'REQUESTED';
	}
	else
	{
		echo 'NOTREQUESTED';
	}
?>
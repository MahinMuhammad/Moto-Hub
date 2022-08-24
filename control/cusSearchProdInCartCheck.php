<?php  

	if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
	
	$Product['Product_Id'] = $_POST['Product_Id'];
	$Product['email'] = $_COOKIE['status'];
	
	require_once "../model/userModel.php";

	if(searchProdInCart($Product))
	{
		echo 'INCART';
	}
	else
	{
		echo 'NOTINCART';
	}
?>
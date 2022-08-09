<?php  

	$user['email'] = $_POST['email'];
	require_once "../model/userModel.php";

	if(!isset($_COOKIE['status']))
    {
		if (uniqueEmail($user)) 
		{
			echo "UNIQUE";
		}
		else
		{
			echo "NOTUNIQUE";
		}
    }
    else
    {
    	if ($_COOKIE['status'] == $user['email'] || uniqueEmail($user)) 
		{
			echo "UNIQUE";
		}
		else
		{
			echo "NOTUNIQUE";
		}
    }
?>
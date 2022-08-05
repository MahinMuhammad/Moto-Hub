<?php  

	$user['email'] = $_POST['email'];
	require_once "../model/userModel.php";

	if (uniqueEmail($user)) 
	{
		echo "UNIQUE";
	}
	else
	{
		echo "NOTUNIQUE";
	}

?>
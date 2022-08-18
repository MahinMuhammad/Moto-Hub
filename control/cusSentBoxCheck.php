<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    
    ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

    $user['email'] = $_COOKIE['status'];

	require_once "../model/userModel.php";

	$list = sentMsgBox($user);
	$jsonArray = [];
	if(count($list)>0)
	{
		for ($i=0; $i < count($list); $i++) 
		{
			$jsonArray[$i] = "<div class='msgHeadings1' id='{$list[$i]['msg_id']}' onclick='showMsgContent(this.id)' >{$list[$i]['rec_email']}</div>";
		}
		echo json_encode($jsonArray);
	}
	else
	{
		echo "NOMSG";
	}
?>


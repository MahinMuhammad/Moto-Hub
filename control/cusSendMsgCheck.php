<?php
    $json =$_POST['data'];
	$msgObj = json_decode($json);

	$msg['email'] = $_COOKIE['status'];
	$msg['rec_email'] = $msgObj->rec_email;
	$msg['content'] = $msgObj->content;

	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

	require_once "../model/userModel.php";

	if(sendMsg($msg))
	{
		echo 'Massege Sent';
	}
	else
	{
		echo "Invalid";
	}
?>
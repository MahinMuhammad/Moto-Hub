<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $msg['rec_email'] = $_COOKIE['status'];
	$msg['msg_id '] = $_POST['msg_id'];

	require_once "../model/userModel.php";

	$value = getInboxMsgRow($msg);

	echo "<div id='displayMsg'>
			<div id='rec_email'>From: {$value['Email']}</div>
		  	<div id='time1'>Time: {$value['msg_id']}</div>
		  	<div id='seperatorLine1'></div>
		  	<div id='msgContentBody'>{$value['content']}</div>
		  </div>";
?>
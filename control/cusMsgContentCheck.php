<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $msg['email'] = $_COOKIE['status'];
	$msg['msg_id '] = $_POST['msg_id'];

	require_once "../model/userModel.php";

	$value = getMsgRow($msg);

	echo "<div id='displayMsg'>
			<div id='rec_email'>To: {$value['rec_email']}</div>
		  	<div id='time1'>Time: {$value['msg_id']}</div>
		  	<div id='seperatorLine1'></div>
		  	<div id='msgContentBody'>{$value['content']}</div>
		  </div>";
?>
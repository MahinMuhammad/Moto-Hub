<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user['email'] = $_COOKIE['status'];
	require_once "../model/userModel.php";

?>

<html>

	<head>
	    <title>Service</title>
	    <link rel="stylesheet" href="../asset/sideBar.css">
	    <link rel="stylesheet" href="../asset/cusServiceDes.css">
	    <script src="../asset/cusServiceVal.js"></script>
	</head>

	<body onload="loadServices()">
		<font face="Verdana">
		    <aside>
		        <p> Nevigation </p>
		        <a href="">
		          Currently Providing
		        </a>
		        <a href="">
		          History
		        </a>
		        <a href="customerHome.php">
		          Go Home
		        </a>
		      </aside>
		      <div id="canvas">
		      	<div id="canvasTitle">Services</div>
		      	<div id="canvasBorder">
		      		<div id="canvasBody">
		      			
		      		</div>
		      	</div>
		      </div>
	  	</font>
	</body>

</html>
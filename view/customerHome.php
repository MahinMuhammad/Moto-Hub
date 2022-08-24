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
	    <title>Home</title>
	    <link rel="stylesheet" href="../asset/sideBar.css">
	    <link rel="stylesheet" href="../asset/cusHomeDes.css">
	    <script src="../asset/cusHomeVal.js"></script>
	</head>

	<body onload="loadHome()">
		<font face="Verdana">
		    <aside>
		        <p> Nevigation </p>
		        <a href="customerHome.php">
		          Home
		        </a>
		        <a href="cusProfile.php">
		          Profile
		        </a>
		        <a href="cusServices.php">
		          Service
		        </a>
		        <a href="cusInbox.php">
		          Mail Box
		        </a>
		        <a href="cusCart.php">
		          Cart
		        </a>
		        <a onclick="contactAdminForm()">
		          Contact Admin
		        </a>
		        <a href="../control/logout.php">
		          LogOut
		        </a>
		      </aside>
		      <div id="home">
		      	<div id="homeBorder">
		      		<div id="homeBody">
		      			
		      		</div>
		      	</div>
		      </div>
	  	</font>
	</body>

</html>
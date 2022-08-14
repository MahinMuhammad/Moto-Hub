<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user['email'] = $_COOKIE['status'];
	require_once "../model/userModel.php";

?>
<!-- <html>
	<head>
		<title>Home Page</title>
		<style>
			body 
			{
			  background-image: url('../asset/backG.jpg');
			  background-size: cover;
			}
		</style>
	</head>
	<body>
		<fieldset align="center">
			<table  width="100%">
				<tr>
					<td width="250"></td>
					<td align="center" width="200"><a href="cusProfile.php"> Profile </a></td>
					<td align="center" width="200"><a href="cusInbox.php"> Inbox </a></td> 
					<td align="center" width="200"><a href="services.php"> Services </a></td> 			
					<td align="center" width="200"><a href="cusChangePass.php"> Change Password </a></td>
					<td align="center" width="200"><a href="cart.php"> Cart </a></td>
					<td align="center" width="200"><a href="../control/logout.php"> Logout </a></td>
					<td width="250"></td>
				</tr>
			</table>
			<h1>Welcome <?php echo getRow($user)['Name']; ?>!</h1>
		</fieldset>
	</body>
</html> -->

<html>

	<head>
	    <title>Home</title>
	    <link rel="stylesheet" href="../asset/sideBar.css">
	</head>

	<body>
		<font face="Verdana">
		    <aside>
		        <p> Nevigation </p>
		        <a href="customerHome.php">
		          Home
		        </a>
		        <a href="cusProfile.php">
		          Profile
		        </a>
		        <a href="services.php">
		          Service
		        </a>
		        <a href="cusInbox.php">
		          Mail Box
		        </a>
		        <a href="cart.php">
		          Cart
		        </a>
		        <a href="../control/logout.php">
		          LogOut
		        </a>
		      </aside>
	  	</font>
	</body>

</html>
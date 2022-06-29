<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user = explode('|', $_COOKIE['status']); 
?>
<html>
	<head>
		<title>Home Page</title>
	</head>
	<style>
		body 
		{
		  background-image: url('backG.jpg');
		  background-size: cover;
		}
	</style>
	<body>
		<fieldset align="center">
			<table  width="100%">
				<tr>
					<td width="250"></td>
					<td align="center" width="200"><a href="profileCus.php"> Profile </a></td>			
					<td align="center" width="200"><a href="changePass.html"> Change Password </a></td>
					<td align="center" width="200"><a href="cart.php"> Cart </a></td>
					<td align="center" width="200"><a href="logout.php"> Logout </a></td>
					<td width="250"></td>
				</tr>
			</table>
			<h1>Welcome <?php echo trim($user[2]); ?>!</h1>
			
			
			
		</fieldset>
	</body>
</html>
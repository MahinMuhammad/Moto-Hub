<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
?>
<html>
	<head>
		<title>username</title>
		<script src="../asset/cusCngPassVal.js"></script>
	</head>
	<style>
		body 
		{
		  background-image: url('../asset/backG.jpg');
		  background-size: cover;
		}
	</style>
	<body>
		<form method="post" action="">
			<fieldset align="center">
				<legend>CHANGE PASSWORD</legend>
				<table align="center">
					<tr>
						<td>Current Password</td>
						<td><input type="password" id="password" name="password" value=""><br></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="password" id="passwordNew" name="passwordNew" value=""><br></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" id="passwordConf" name="passwordConf" value=""><br></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Confirm" onclick="return !!(notEmpty() && cngPass());">
							<a href="customerHome.php"> Go Back </a>
						</td>
					</tr>
				</table>						 
			</fieldset>
		</form>
	</body>
</html>
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
		<title></title>
		<script src="../asset/cusSetVal.js"></script>
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
				<legend>SETTINGS</legend>
				<table align="center">
					<tr>
						<td>Name</td>
						<td><input type="text" id="name" name="name" value="<?php echo getRow($user)['Name']; ?>"><br></td>
					</tr>

					<tr>
						<td>Email</td>
						<td><input type="email" id="email" name="email" value="<?php echo getRow($user)['Email']; ?>"><br></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Save" onclick="return !!(notEmpty() && changeInfo());">
							<a href="cusProfile.php"> GO BACK </a> 
						</td>
					</tr>
				</table>
				_______________________________________<br>
				<a href="cusAccoutDelete.php"> DELETE ACCOUNT! </a> 
			</fieldset>
		</form>
	</body>
</html>
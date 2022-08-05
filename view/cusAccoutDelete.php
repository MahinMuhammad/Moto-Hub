<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }
 ?>

<html>
	<head>
		<title></title>
		<script src="../asset/cusDelAccVal.js"></script>
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
				<table align="center">
					<tr>
						<td>Password</td>
						<td><input type="password" id="password" name="password" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Delete" onclick="return !!(notEmpty() && delAcc());">
							<a href="cusSettings.php"> ABORT </a> 
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>
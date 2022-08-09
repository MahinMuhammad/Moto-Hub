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
		<link rel="stylesheet" type="text/css" href="../asset/cusCngPassDes.css">
	</head>
	<body>
		<form method="post" action="">
			<div id="passTitle1">Change Pass</div>
			<div align="center" class="inputInfo">
				<label>Current Password</label>
				<div><input type="password" id="password" name="password" value=""></div>
				<label>New Password</label>
				<div><input type="password" id="passwordNew" name="passwordNew" value=""></div>
				<label>Confirm Password</label>
				<div><input type="password" id="passwordConf" name="passwordConf" value=""></div>
				</div>
			<div>
				<input id="btn" type="button" name="submit" value="Confirm" onclick="return !!(notEmpty() && cngPass());">
			</div>
		</form>
	</body>
</html>
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
		<link rel="stylesheet" type="text/css" href="../asset/cusDelAccDes.css">
	</head>
	<body>
		<form method="post" action="">
			<div id="delTitle1">Delete ID</div>
			<div align="center" class="inputInfo">
				<label>Password</label>
				<div><input type="password" id="password" name="password" value=""></div>
				<div>
					<input id="btn" type="button" name="submit" value="Delete" onclick="return !!(notEmpty() && delAcc());">
				</div>
			</div>
		</form>
	</body>
</html>
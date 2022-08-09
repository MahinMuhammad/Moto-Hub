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
		<link rel="stylesheet" type="text/css" href="../asset/cusSetDes.css">
	</head>
	<body id="settings1">
		<form method="post" action="">
			<div id="setTitle1">EDIT</div>
				<div align="center" class="inputInfo">
					<label class="inputLab1">Name</label>
					<input type="text" id="name" name="name" value="<?php echo getRow($user)['Name']; ?>">
					<label class="inputLab1">Gender</label>
					<input type="text" id="gender" name="gender" value="<?php echo getRow($user)['Gender']; ?>">
					<label class="inputLab1">DOB</label>
					<input type="date" id="dob" name="dob" value="<?php echo getRow($user)['DOB']; ?>">
				</div>
				<div align="center" class="inputInfo2">
					<label class="inputLab1">Email</label>
					<input type="email" id="email" name="email" value="<?php echo getRow($user)['Email']; ?>">
					<label class="inputLab1">Phone</label>
					<input type="text" id="phone" name="phone" value="<?php echo getRow($user)['Phone']; ?>">
					<label class="inputLab1">Address</label>
					<input type="text" id="address" name="address" value="<?php echo getRow($user)['Address']; ?>">
				</div>
				<div align="center">
					<input id="btn1" type="button" name="submit" value="Save" onclick="return !!(notSetEmpty() && uniqueEmail());">
				</div>
		</form>
	</body>
</html>
<?php 

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
?>
<html>
	<head>
		<title>ProPic</title>
		<script src="../asset/cusCngPicVal.js"></script>
		<link rel="stylesheet" type="text/css" href="../asset/cusCngPicDes.css">
	</head>
	<body>
		<form method="post" action="../control/cusChangePicCheck.php" enctype="multipart/form-data">
			<div id="pictitle1">Profile Pic</div>
			<div id="BrowseBox1">
				<label id="Browse1" >
				<input id="file" type="file" accept="image/*" name="myfile" onchange="showSelectedPic(event)">
				Browse
				</label>
				<div>
					<img id="imgShow1">
				</div>
			</div>
			<input id="picButton1" type="submit" name="Submit" value="Save">
		</form>
	</body>
</html>
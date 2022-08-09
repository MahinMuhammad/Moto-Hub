<?php  

	if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
	}
	$user['email'] = $_COOKIE['status'];
	require_once "../model/userModel.php";

?>

<html lang="en">

<head>
    <title>Inbox</title>
    <link rel="stylesheet" href="../asset/sideBar.css">
</head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<body>
    <aside>
        <p> Nevigation </p>
        <a href="javascript:void(0)">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          My drive
        </a>
        <a href="javascript:void(0)">
          <i class="fa fa-laptop" aria-hidden="true"></i>
          Computers
        </a>
        <a href="javascript:void(0)">
          <i class="fa fa-clone" aria-hidden="true"></i>
          Shared with me
        </a>
        <a href="javascript:void(0)">
          <i class="fa fa-star-o" aria-hidden="true"></i>
          Starred
        </a>
        <a href="javascript:void(0)">
          <i class="fa fa-trash-o" aria-hidden="true"></i>
          Trash
        </a>
      </aside>
      
      <div class="social">
        <a href="https://www.instagram.com/codewith_random/" target="_blank">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
</body>

</html>
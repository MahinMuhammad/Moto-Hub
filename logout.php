<?php 
	setcookie('status', 'true', time()-100, '/');
	header('location: login.html');
?>
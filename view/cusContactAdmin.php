<?php 

  if(!isset($_COOKIE['status']))
  {
    header('location: login.html');
  }
  $user['email'] = $_COOKIE['status'];

?>

<html>
  <head>
    <title>Send Messege</title>
    <script src="../asset/cusHomeVal.js"></script>
    <link rel="stylesheet" type="text/css" href="../asset/cusContactAdminDes.css">
  </head>
  <body>
    <form method="post" action="">
      <div id="contactForm">
        <div onclick="closeProductDetails()" id="clsBtn">X</div>
          <label>Contact Admin</label>
          <div><textarea type="text" id="contentAdmin" name="content" value=""></textarea></div>
          <div>
            <input id="btnAdmin" type="button" value="Send" onclick="contactAdmin()">
          </div>
      </div>
    </form>
  </body>
</html>
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
    <script src="../asset/cusSendMsgVal.js"></script>
    <link rel="stylesheet" type="text/css" href="../asset/cusSendMsgDes.css">
  </head>
  <body>
    <form method="post" action="">
      <div align="center" class="inputInfo">
        <label>To</label>
        <div><input type="email" id="rec_email" name="rec_email" value=""></div>
        <label>Write</label>
        <div><textarea type="text" id="content" name="content" value=""></textarea></div>
        </div>
      <div>
        <input id="btn" type="button" name="submit" value="Send" onclick="return !!(notEmpty() && emailExits());">
      </div>
    </form>
  </body>
</html>
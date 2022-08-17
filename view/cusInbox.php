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
      <title>Home</title>
      <link rel="stylesheet" href="../asset/sideBar.css">
      <link rel="stylesheet" type="text/css" href="../asset/cusInboxDes.css">
      <script src="../asset/cusInbox.js"></script>
      <script src="../asset/cusSendMsgVal.js"></script>
  </head>

  <body>
    <font face="Verdana">
        <aside>
            <p> Nevigation </p>
            <a href="javascript:void(0)" onclick="loadMsgForm()">
              Create
            </a>
            <a href="javascript:void(0)">
              Inbox
            </a>
            <a href="javascript:void(0)">
              Sent
            </a>
            <a href="customerHome.php">
              Go Home
            </a>
          </aside>
          <div id="msgBox">
            <div id="msgTitle">
              <div id="msgTitleBox">
                
              </div>
            </div>
            <div id="msgBody">
              <div id="msgBodyBox">
                <div id="msgForm">
                  <div onclick="hideMsgForm()" id="cnclBtn">X</div>
                  <div id="msgFormInside"></div>
                </div>
                
              </div>
            </div>
          </div>
      </font>
  </body>

</html>
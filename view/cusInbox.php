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

  <body onload="loadInbox()">
    <font face="Verdana">
        <aside>
            <p> Nevigation </p>
            <a href="javascript:void(0)" onclick="loadMsgForm()">
              Create
            </a>
            <a href="javascript:void(0)" onclick="loadInbox()">
              Inbox
            </a>
            <a href="javascript:void(0)" onclick="loadSent()">
              Sent
            </a>
            <a href="customerHome.php">
              Go Home
            </a>
          </aside>
          <div id="msgBox">
            <div id="windowTitle">Inbox</div>
            <div id="msgTitle">
              <div id="msgTitleBox">
                
              </div>
            </div>
            <div id="msgBody">
              <div id="msgBodyBox">
                <div id="msgForm">
                  <div onclick="hideMsgForm(); loadInbox()" id="cnclBtn">X</div>
                  <div id="msgFormInside"></div>
                </div>
                <div id="content1">
                  
                </div>
              </div>
            </div>
          </div>
      </font>
  </body>

</html>
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
        <link rel="stylesheet" href="../asset/cusCartDes.css">
        <script src="../asset/cusCartVal.js"></script>
    </head>

    <body onload="loadCart()">
        <font face="Verdana">
            <aside>
                <p> Nevigation </p>        
                <a href="">
                  Browse Cart
                </a>
                <a onclick="loadHistory()">
                  History
                </a>
                <a href="customerHome.php">
                  Go Home
                </a>
              </aside>
              <div id="cartWindow">
                  <hr>
                  <div id="allProdHolder">
                      <div id="allProdHolderInside"></div>
                  </div>
                  <div id="cartSeperator"></div>
                  <div  id="selectedProdHolder">
                      <div  id="selectedProdHolderInside">
                          <div id="selectedProdList"></div>
                          <hr id="insideHR">
                          <div id="totalCount">Total: <a id="totalPrice">0</a> bdt</div>
                      </div>
                      <div align="center" id="checkoutBtn" onclick="checkoutController()">Check Out</div>
                  </div>
                  <hr>
              </div>
        </font>
    </body>
</html>





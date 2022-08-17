<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: login.html');
    }
    $user['email'] = $_COOKIE['status'];
    require_once "../model/userModel.php";
?>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="../asset/sideBar.css">
    <link rel="stylesheet" href="../asset/cusProfileDes.css">
    <script src="../asset/cusProf.js"></script>
    <script src="../asset/cusSetVal.js"></script>
    <script src="../asset/cusCngPassVal.js"></script>
    <script src="../asset/cusDelAccVal.js"></script>
    <script src="../asset/cusCngPicVal.js"></script>
</head>

    <body>
        <font face="Verdana">
            <aside>
                <p> Nevigation </p>
                
                <a href="javascript:void(0)" onclick="cleanBox(); loadSettings(); editWindowOpen();">
                  Edit
                </a>
                <a href="javascript:void(0)" onclick="cleanBox(); loadCngPass(); editWindowOpen();">
                  Change Pass
                </a>
                <a href="javascript:void(0)" onclick="cleanBox(); loadAccDel(); editWindowOpen();">
                  Detele Id
                </a>
                <a href="customerHome.php">
                  Go Home
                </a>
              </aside>
              <div id="prof">
                  <div id="title1">
                      PROFILE
                  </div>
                  <hr>
                  <div id="propic" onclick="cleanBox(); loadSelectPic(); editWindowOpen();">
                      <img src="data:image/png;base64,<?php echo getRow($user)['propic']; ?>" onerror='this.style.display = "none"' />
                      
                  </div>
                  <div id="divider1"></div>
                  <div id="info1">
                      <div class="info1Col">
                          <div>
                              NAME 
                          </div>
                          <div class="colinfo">
                              GENDER 
                          </div>
                          <div class="colinfo">
                              DOB 
                          </div>
                          <div class="colinfo">
                              TYPE 
                          </div>
                      </div>
                      <div class="reslt1Col">
                          <div>
                              <?php echo getRow($user)['Name']; ?>
                          </div>
                          <div class="colinfo">
                              <?php echo getRow($user)['Gender']; ?>
                          </div>
                          <div class="colinfo">
                              <?php echo getRow($user)['DOB']; ?>
                          </div>
                          <div class="colinfo">
                              <?php echo getRow($user)['UserType']; ?>
                          </div>
                      </div>
                  </div>
                  <div id="info2">
                      <div class="info1Col">
                          <div class="colinfo">
                              EMAIL 
                          </div>
                          <div class="colinfo">
                              PHONE 
                          </div>
                          <div class="colinfo">
                              ADD 
                          </div>
                      </div>
                      <div class="reslt1Col">
                            <div class="colinfo">
                              <?php echo getRow($user)['Email']; ?>
                          </div>
                          <div class="colinfo">
                              <?php echo getRow($user)['Phone']; ?>
                          </div>
                          <div class="colinfo">
                              <?php echo getRow($user)['Address']; ?>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div id="fields1">
                    <div id="close1" onclick="editWindowClose()">X</div>
                    <div id="box1"></div>
                  </div>
              </div>
        </font>
    </body>


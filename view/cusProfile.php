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
     </head>
        <style>
        body 
        {
          background-image: url('../asset/backG.jpg');
          background-size: cover;
        }
    </style>
     <body>
        <table border="1" align="center" width="40%">
            <tr>
                <td align="center">PROFILE</td>
            </tr>
            <tr>
                <td>
                    <table align="center" width="50%">
                        <tr>
                            <td>NAME</td>
                            <td><?php echo getRow($user)['Name']; ?></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td><?php echo getRow($user)['Email']; ?></td>
                        </tr>
                        <tr>
                            <td>USER TYPE</td>
                            <td><?php echo getRow($user)['UserType']; ?></td>
                        </tr>
                        <tr>
                            <td><a href="cusSettings.php"> SETTINGS </a></td>
                            <td><a href="customerHome.php"> GO HOME </a></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
     </body>
 </html>

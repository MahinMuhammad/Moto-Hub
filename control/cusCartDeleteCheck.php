<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $prod['email'] = $_COOKIE['status'];

    $prod['Product_Id'] = $_POST['Product_Id'];

    require_once "../model/userModel.php";

    if(deleteProdFromCart($prod))
    {
        echo 'DELETED';
    }
    else
    {
        echo 'FATAL';
    }
 ?>
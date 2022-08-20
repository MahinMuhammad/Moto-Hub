<?php
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $com['email'] = $_COOKIE['status'];

    $json =$_POST['data'];
    $comObj = json_decode($json);
    $com['comment'] = $comObj->comment;
    $com['Product_Id'] = $comObj->Product_Id;

    require_once "../model/userModel.php";

    if(saveComment($com))
    {
        echo 'saved';
    }
    else
    {
        echo 'Invalid';
    }
?>
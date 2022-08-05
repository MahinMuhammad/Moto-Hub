<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $user['email'] = $_COOKIE['status'];

    $user['pass'] = $_POST['password'];

    require_once "../model/userModel.php";

    if(deleteUser($user))
    {
        setcookie('status', 'delete', time()-100, '/');
        echo '../view/login.html';
    }
    else
    {
        echo 'WRONGPASS';
    }
 ?>


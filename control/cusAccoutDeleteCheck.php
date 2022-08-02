<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }
    $user['email'] = $_COOKIE['status'];

    $user['pass'] = $_POST['password'];

    require_once "../model/userModel.php";

    if($user['pass'] == null)
    {
        echo '<h1>Empty Field!!!</h1>';
        echo'<br><a href="../view/cusAccoutDelete.php"> Go Back </a>';
    }
    else
    {
        if(deleteUser($user))
        {
            setcookie('status', $newLine, time()-100, '/');
            header('location: ../view/login.html');
        }
        else
        {
            echo '<h1>Wrong Password!!!</h1>';
            echo'<br><a href="../view/cusAccoutDelete.php"> Go Back </a>';
        }
    }
 ?>


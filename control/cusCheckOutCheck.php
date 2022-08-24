<?php 
    if(!isset($_COOKIE['status']))
    {
        header('location: ../view/login.html');
    }

    require_once "../model/userModel.php";

    $prod['email'] = $_COOKIE['status'];
    $prod['Product_Id'] = null;
    $prod['rec_email'] = null;
    $prod['amount'] = null;

    $json =$_POST['data'];
    $result = json_decode($json);

    $flag = false;

    for ($i=0; $i < count($result); $i++) { 

        $prod['Product_Id'] = $result[$i];

        $prod['rec_email'] = getProdRow($result[$i])['Email'];

        $prod['amount'] = getProdRow($result[$i])['Price'];

        sleep(1);

        ini_set('display_errors', 1);
        error_reporting(E_ALL|E_STRICT);

        chekoutCart($prod);
        deleteProdFromCart($prod);
        $flag = true;
    }

    if($flag)
    {
        echo 'DONE';
    }
    else
    {
        echo 'FATAL';
    }
 ?>
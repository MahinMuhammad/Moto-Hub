<?php 
    require_once "db.php";

    function login($user){
        $conn = getConnection();
        $sql = "select * from userTab where Email='{$user['email']}' and Pass='{$user['pass']}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0)
        {
            return true;
        }else{
            return false;
        }
    }

    function reg($user){
        $conn = getConnection();
		$sql = "insert into userTab values('{$user['username']}', '{$user['email']}', '{$user['pass']}', '{$user['userType']}', '{$user['dob']}', '{$user['gender']}', '{$user['address']}', '{$user['phone']}', DEFAULT)";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getRow($user){
        $conn = getConnection();
        $sql = "select * from userTab where Email='{$user['email']}'";
        $result = mysqli_query($conn, $sql);
        $value = mysqli_fetch_assoc($result);
        return $value;
    }

    function updateRow($user){
        $conn = getConnection();
        $sql = "update userTab set Name='{$user['name']}', Email='{$user['emailNew']}' where Email='{$user['email']}'";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn))
        {
            return true;
        }else{
            return false;
        }
    }

    function updatePass($user){
        $conn = getConnection();
        $sql = "update userTab set Pass='{$user['passNew']}' where Email='{$user['email']}' and Pass='{$user['pass']}'";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn))
        {
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($user){
        $conn = getConnection();
        $sql = "delete from userTab where Email='{$user['email']}' and Pass='{$user['pass']}'";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn))
        {
            return true;
        }else{
            return false;
        }
    }

    function uniqueEmail($user)
    {
        $conn = getConnection();
        $sql = "select * from userTab where Email='{$user['email']}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0)
        {
            return false;
        }else
        {
            return true;
        }
    }

    function setProPic($user, $encoded){
        $conn = getConnection();
        $sql = "update userTab set propic='$encoded' where Email='{$user['email']}'";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn))
        {
            return true;
        }else{
            return false;
        }
    }

    function sendMsg($msg){
        $conn = getConnection();
        $sql = "insert into msgTab values(DEFAULT, '{$msg['content']}', '{$msg['email']}', '{$msg['rec_email']}')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function sentMsgBox($user){
        $conn = getConnection();
        $sql = "select * from msgTab where Email='{$user['email']}'";
        $result = mysqli_query($conn, $sql);
        $list = [];
        $i = 0;
        while ($value = mysqli_fetch_assoc($result)) 
        {
            $list[$i] = $value;
            $i++;
        }
        
        return $list;
    }

    function getMsgRow($msg){
        $conn = getConnection();
        $sql = "select * from msgTab where Email='{$msg['email']}' and msg_id='{$msg['msg_id ']}'";
        $result = mysqli_query($conn, $sql);
        $value = mysqli_fetch_assoc($result);
        return $value;
    }

    function inMsgBox($user){
        $conn = getConnection();
        $sql = "select * from msgTab where rec_email='{$user['rec_email']}'";
        $result = mysqli_query($conn, $sql);
        $list = [];
        $i = 0;
        while ($value = mysqli_fetch_assoc($result)) 
        {
            $list[$i] = $value;
            $i++;
        }
        
        return $list;
    }

    function getInboxMsgRow($msg){
        $conn = getConnection();
        $sql = "select * from msgTab where rec_email='{$msg['rec_email']}' and msg_id='{$msg['msg_id ']}'";
        $result = mysqli_query($conn, $sql);
        $value = mysqli_fetch_assoc($result);
        return $value;
    }

    function showProducts(){
        $conn = getConnection();
        $sql = "select * from prodTab";
        $result = mysqli_query($conn, $sql);
        $list = [];
        $i = 0;
        while ($value = mysqli_fetch_assoc($result)) 
        {
            $list[$i] = $value;
            $i++;
        }
        
        return $list;
    }

    function getProdRow($Product_Id){
        $conn = getConnection();
        $sql = "select * from prodTab where Product_Id='{$Product_Id}'";
        $result = mysqli_query($conn, $sql);
        $value = mysqli_fetch_assoc($result);
        return $value;
    }
?>











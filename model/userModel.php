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
		$sql = "insert into userTab values('{$user['username']}', '{$user['email']}', '{$user['pass']}', '{$user['userType']}', '{$user['dob']}', '{$user['gender']}', '{$user['address']}', '{$user['phone']}')";
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
?>











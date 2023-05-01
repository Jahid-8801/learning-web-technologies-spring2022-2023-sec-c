<?php 
    require_once('db.php');

    function auth($email, $password){

        $con = getConnection();
        $sql = "select * from users where email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count >= 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($Name,$Email,$Password){
        $con = getConnection();
        $sql = "insert into users(user,email,password) values ('$Name','$Email','$Password')";
        $status = mysqli_query($con, $sql);
        return $status;



        
    }


?>
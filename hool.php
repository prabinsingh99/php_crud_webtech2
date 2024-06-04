<?php
    require("Connect.php");


    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    $loginbtn = $_POST['login'];

    if (isset($loginbtn)){
        $query = "SELECT * FROM `test_crud` WHERE `username` = '$userName' AND `password` = '$passWord'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['adminUserId'] = $userName;
            header("Location:/php-mysqli-crud/admindash.php");

        }
        else{
            echo "<script>alert('Login Error');</script>";
            header("Location:/php-mysqli-crud/index.html");	
        }
    }


?>


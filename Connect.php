<?php

    $conn = mysqli_connect("localhost","root","","admin_login");
    if(mysqli_connect_error()){
        echo "can't connect to database: " . mysqli_error;
    }
?>
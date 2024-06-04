<?php
    session_start();
    if(!isset($_SESSION['adminUserId'])){
        header("Location:index.html");
    }
?>
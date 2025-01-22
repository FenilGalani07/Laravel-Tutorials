<?php
    session_start();
    if($_REQUEST){
        if($_REQUEST['user'] === "abc@example.com" && $_REQUEST['pass'] === "123"){
            $_SESSION['user'] = $_GET['user'];
            $_SESSION['pass'] = $_GET['pass'];
            header("Location: http://localhost/laravel-tutorials/Program-6/admin.php");
        }else{
            header("Location: http://localhost/laravel-tutorials/Program-6/");
        }
    }else{
        header("Location: http://localhost/laravel-tutorials/Program-6/");
    }
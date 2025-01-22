<?php
    if($_REQUEST){
        if($_REQUEST['user'] === "abc@example.com" && $_REQUEST['pass'] === "123"){
            $user = 'user';
            $pass = 'pass';
            $time = time() + 86400;
            if(!isset($_COOKIE['user'])){
                echo "Cookies is not Set: " . time();
                setcookie($user, $_REQUEST['user'], $time, "/"); // 86400 = 1 day
                setcookie($pass , md5($_REQUEST['pass']), $time, "/");
            }else{
                echo "Cookie is now Set : " . time(); 
            }
            header("Location:http://localhost/laravel-tutorials/Program-8/admin.php");
        }else{
            header("Location:http://localhost/laravel-tutorials/Program-8/");
        }
    }else{
        header("Location:http://localhost/laravel-tutorials/Program-7/");
    }
?>
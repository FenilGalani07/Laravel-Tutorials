<?php
    if($_REQUEST){
$username = $_REQUEST['username'];
       $password = $_REQUEST['password'];
       if($username === "abc@example.com" && $password === "123"){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            echo "Login Successful!";
            print_r($_SESSION);
            echo "<br/><a href='mypage.php'>Go to My Page</a>";
       }else{
        echo "Invalid Username or Password!";
       }
    }
?>
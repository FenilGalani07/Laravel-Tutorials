<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <?php 
        require 'header.php';
    ?>
</head>
<body>
    <div class="container">
        <?php
            include_once 'menu.php';
        ?>
        <h1>Welcome to Admin Page....</h1>
        <h2>Here you will get a nice coffee!!!</h2>
        <h3>Starbucks Coffee!!!</h3>
        <?php
            echo "<p>Welcome,  Username: $_COOKIE[user]</p>";
            echo "<p>Your Password is : $_COOKIE[pass]</p>";
        ?>
    </div>
</body>
</html>
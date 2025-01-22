

<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session - PHP_ROUND_HALF_DOWN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
    <?php
        // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    ?>

    <br/><a href="mypage.php">Go to my Page</a>
    <br/><a href="ourpage.php">Go to Our Page</a>
    <br/><a href="yourpage.php">Go to your Page</a>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
</head>
<body>
    <h1>Foreach Loop</h1>
    <ul>
        <?php
            $fruits = array("apple", "banana", "cherry", "date");
            foreach($fruits as $fruit){
                echo "<li>$fruit</li>";
            }
       ?>
    </ul>
    <a href="index.php">Back to Index</a></h1>
</body>
</html>
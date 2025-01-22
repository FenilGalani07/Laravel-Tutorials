<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calling Class Content</h1>
    <?php
    include_once 'Employee.class.php';
    $emp = new Employee("abc","aad123","bank_123");
    $emp->displayDetails();

    
    $emp1 = new Employee();
    $emp1->displayDetails();
    ?>
</body>
</html>
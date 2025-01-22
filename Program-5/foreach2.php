<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php 
    include_once 'data.php'; 
    $var ="hello how are you khana khake jana!!!";
    //echo str_word_count($var);
    //echo str_repeat($var, 100);
    echo strpos($var,"how");
    echo "<pre>";
    $myvar ="           this is my data             "   ;
    echo "</pre>";
    echo "<br/>". trim($myvar,' ') ;
    echo "<br/>". rtrim($myvar,' ') ;
    echo "<br/>". ltrim($myvar,' ') ;
    ?>
    <div class="container">
        <h1>Foreach Loop</h1>
        <table class="table table-sm table-striped table-bordered table-hover ">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                foreach ($employeesData as $employee) {
                    if($employee['gender'] == 'Male'){
                        $gender = 1;
                    }else{
                        $gender = 0;
                    }
                    $employee['first_name'] = str_replace("Dennie", "Harsh",$employee['first_name']);
                    echo '<tr>';
                    echo '<td>' . $employee['id'] . '</td>';
                    echo '<td>' . $employee['first_name'] . '</td>';
                    echo '<td>' . $employee['last_name'] . '</td>';
                    echo '<td>' . $employee['email'] . '</td>';
                    echo '<td>' . $employee['gender'] . '</td>';
                    echo '<td>' . strrev($employee['ip_address']) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>

        </table>
        <a href="index.php">Back to Index</a></h1>
    </div>
</body>

</html>

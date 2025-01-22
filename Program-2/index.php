<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>My Website</h1>
        <form>
            <div class="form-group">
                <label>Enter First Number</label>
                <input type="text" name="first" class="form-control" placeholder="Enter First Number">
            </div>
            <div class="form-group">
                <label>Enter Second Number</label>
                <input type="text" name="second" class="form-control" placeholder="Enter Second Number">
            </div>
            <div class="form-group">
                <label>Operation</label>
                <input type="text" name="third" class="form-control" placeholder="Operation">
            </div>
            <input type="submit" class="btn btn-primary"/>
        </form>
    </div>
    <?php
    include_once 'Calculator.class.php';
    
    if ($_REQUEST) {
        $first = $_REQUEST['first'];
        $second = $_REQUEST['second'];
        $operation = $_REQUEST['third'];
        $calc = new Calculator($first, $second, $operation);
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
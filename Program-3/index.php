<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = array(1,2,3,4,5,6,7,8,9,10);
        $i = 0;
        if(0){
            echo "Hello";
        }else{
            echo "World";
        }

        do{
            echo $a[$i++];
        }while(0);
    ?>
</body>
</html>
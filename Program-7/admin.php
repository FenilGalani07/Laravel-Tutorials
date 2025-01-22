<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include_once 'menu.php';
        ?>
        <h1>Admin Page</h1>
        <?php

            if(!isset($_SESSION['user'])){
                header("Location: http://localhost/laravel-tutorials/Program-6/");
            }
    
        ?>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque, magni corporis. Repellendus odit officiis cumque consequuntur eveniet quo fuga, modi, nulla ex temporibus incidunt dolor vitae. Dolores ea ab reiciendis?
        In, voluptatibus corrupti expedita quae quidem nostrum dolorum ab modi non, quos sapiente? Provident ipsa nam ab natus exercitationem ea enim, ratione esse ullam, dolor repellat, molestiae accusamus itaque nesciunt?
        Quibusdam corporis assumenda deleniti eum distinctio? Rem fugiat accusamus repudiandae voluptatem totam soluta voluptate quibusdam voluptas distinctio illum facere delectus ratione sint blanditiis laudantium autem id, magnam veritatis possimus eveniet.
        Similique nihil reprehenderit, dolores, veritatis facilis numquam obcaecati ipsum corrupti iure excepturi cumque corporis ipsam provident iusto impedit autem voluptate debitis rem nostrum! Expedita, voluptates consequuntur. Ex odit magni eius!
        Dicta perferendis maxime consectetur, consequatur, quaerat quod tempore sequi, commodi impedit amet doloremque inventore natus saepe explicabo! Sequi, libero beatae natus exercitationem voluptatum a, nam iste possimus voluptatibus earum veniam.
        Nesciunt voluptates necessitatibus ratione aperiam obcaecati dolorem praesentium. Rerum quas suscipit asperiores necessitatibus autem magnam, veritatis sed modi deleniti commodi inventore aperiam dolores, iusto ex delectus, tenetur quae incidunt quos.
        Aut voluptates earum corporis eos delectus ad eum dicta voluptatibus at, aperiam deleniti consequuntur nulla nostrum, modi et odio qui similique iste laborum sunt soluta libero. Non magnam nemo saepe?
        Recusandae omnis esse, exercitationem veniam architecto quo iusto suscipit ipsa ad voluptatem id aspernatur deleniti consectetur fugit blanditiis? Fuga cumque animi cum eos esse odit, repellendus commodi alias obcaecati a!
        Saepe, ullam cumque? Laborum ipsum eveniet quisquam repellendus fugiat vero pariatur veritatis molestiae accusantium neque recusandae voluptas debitis, quidem omnis amet minima saepe? Quia nobis ipsam, incidunt illum id nisi?
        Consectetur cum incidunt reprehenderit error quidem eum. Ut voluptates, voluptatem deserunt modi repellendus eos, dolorum, soluta reiciendis excepturi molestias nihil et voluptatum deleniti. Deserunt asperiores fugit perspiciatis aliquid repellendus dignissimos.
        Autem sequi perferendis distinctio voluptates quia deserunt sunt labore in, rem, recusandae iste placeat doloribus quaerat consectetur ex dolorum unde porro harum rerum. Sequi, delectus. Debitis quaerat dignissimos quisquam perspiciatis!
        Accusantium et sint cumque odit, voluptates quis in architecto voluptate minima natus quae qui recusandae quaerat, iste laboriosam deserunt tenetur est totam delectus, dicta excepturi. Reiciendis libero repellendus neque voluptatem!</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
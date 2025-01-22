<?php
    setcookie("user", "abc@example.com", time() - 86400, "/");
    setcookie("pass", "abc@example.com", time() - 86400, "/");
    header("Location:http://localhost/laravel-tutorials/Program-8/");

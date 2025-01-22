# PHP Cookie Management Example

## Introduction

Welcome to the **PHP Cookie Management Example** repository! This project demonstrates how to use cookies in PHP for user authentication. It includes a login form, cookie handling, and a simple admin page that displays user information. This project is designed for beginners to understand how cookies work in PHP and how to manage user sessions.

## Repository Link

You can find the repository here: [PHP Cookie Management Example](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  
GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Features

- **User  Authentication**: A simple login form that checks user credentials.
- **Cookie Management**: Demonstrates how to set, retrieve, and delete cookies in PHP.
- **Dynamic Content Display**: Displays user information on the admin page after successful login.
- **Bootstrap Integration**: Utilizes Bootstrap for responsive and modern styling.

## Code Overview

### Admin Page (admin.php)

This section displays a welcome message and user information if the cookies are set.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <?php require 'header.php'; ?>
</head>
<body>
    <div class="container">
        <?php include_once 'menu.php'; ?>
        <h1>Welcome to Admin Page....</h1>
        <h2>Here you will get a nice coffee!!!</h2>
        <h3>Starbucks Coffee!!!</h3>
        <?php
            echo "<p>Welcome, Username: $_COOKIE[user]</p>";
            echo "<p>Your Password is: $_COOKIE[pass]</p>";
        ?>
    </div>
</body>
</html>
```

### Login Logic (logic.php)

This section handles the login logic, sets cookies, and redirects users based on their credentials.

```php
<?php
if ($_REQUEST) {
    if ($_REQUEST['user'] === "abc@example.com" && $_REQUEST['pass'] === "123") {
        $user = 'user';
        $pass = 'pass';
        $time = time() + 86400; // 1 day
        if (!isset($_COOKIE['user'])) {
            setcookie($user, $_REQUEST['user'], $time, "/");
            setcookie($pass, md5($_REQUEST['pass']), $time, "/");
        }
        header("Location: http://localhost/laravel-tutorials/Program-8/admin.php");
    } else {
        header("Location: http://localhost/laravel-tutorials/Program-8/");
    }
} else {
    header("Location: http://localhost/laravel-tutorials/Program-7/");
}
?>
```

### Login Form (login-form.php)

This section contains the login form where users can enter their email and password.

```php
<form method="POST" action="logic.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="user" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
```

### Logout Functionality (logout.php)

This section handles user logout by deleting the cookies.

```php
<?php
setcookie("user", "", time() - 86400, "/");
setcookie("pass", "", time() - 86400, "/");
header("Location: http://localhost/laravel-tutorials/Program-8/");
?>
```

## How to Run

To run this PHP cookie management example, follow these steps:

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/FenilGalani07/Laravel-Tutorials.git
   ```

2. **Navigate to the Directory**:

   ```bash
   cd Laravel-Tutorials
   ```

3. **Run the PHP Script**:

   You can run the script using a local server (like XAMPP, MAMP, or WAMP) or the PHP built-in server:
   ```bash
   php -S localhost:8000
   ```

4. **Access the Application**:

   Open your web browser and go to `http://localhost:8000/login.php` to view the login form.


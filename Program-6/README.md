# PHP Session Management Example

## Introduction

Welcome to the **PHP Session Management Example** repository! This project demonstrates how to manage user sessions in PHP, including user login functionality and session handling. It provides a simple login form and displays user information upon successful login.

## Repository Link

You can find the repository here: [PHP Session Management Example](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  

GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Features

- **User  Authentication**: A simple login form that checks user credentials.
- **Session Management**: Demonstrates how to start and manage sessions in PHP.
- **Dynamic Content Display**: Displays user information after successful login.
- **Bootstrap Integration**: Utilizes Bootstrap for responsive and modern styling.

## Code Overview

### Login Form (admin.php)

This section contains the login form where users can enter their email and password.

```php
<?php
session_start();
if ($_REQUEST) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if ($username === "abc@example.com" && $password === "123") {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "Login Successful!";
        print_r($_SESSION);
        echo "<br/><a href='mypage.php'>Go to My Page</a>";
    } else {
        echo "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session - PHP_ROUND_HALF_DOWN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Session Demo</h1>
        <form action="admin.php" method="post">
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="username" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
```

### Session Display (mypage.php)

This section displays the user's session information if they are logged in.

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session - PHP_ROUND_HALF_DOWN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
    if (isset($_SESSION['username'])) {
        echo "<br/>" . $_SESSION['username'];
        echo "<br/>" . $_SESSION['password'];
    } else {
        echo "You are not logged in";
        echo "<br/><a href='login.php'>Login</a>";
    }
    ?>
    <br/><a href="mypage.php">Go to my Page</a>
    <br/><a href="ourpage.php">Go to Our Page</a>
    <br/><a href="yourpage.php">Go to your Page</a>
</body>
</html>
```

## How to Run

To run this PHP session management example, follow these steps:

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

   Open your web browser and go to `http://localhost:8000/admin.php` to view the login form.

## Contributing

Contributions are welcome! If you have suggestions for improvements or additional features, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
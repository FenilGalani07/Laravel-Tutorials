# PHP Login System with Session Management

## Introduction

Welcome to the **PHP Login System with Session Management** repository! This project demonstrates how to create a simple login system using PHP sessions. It includes a login form, session handling, and a navigation menu. The project is designed for beginners to understand how to manage user sessions and implement basic authentication.

## Repository Link

You can find the repository here: [PHP Login System](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  

GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Features

- **User  Authentication**: A simple login form that checks user credentials.
- **Session Management**: Demonstrates how to start and manage sessions in PHP.
- **Dynamic Navigation**: Includes a responsive navigation menu using Bootstrap.
- **Logout Functionality**: Allows users to log out and clear their session data.

## Code Overview

### Login Page (login.php)

This section contains the login form where users can enter their email and password.

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php include_once 'menu.php'; ?>
        <h1>Login Page</h1>
        <form action="logic.php">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
```

### Navigation Menu (menu.php)

This section contains the navigation menu that is included in the login page.

```php
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
```

### Logout Functionality (logout.php)

This section handles user logout by destroying the session.

```php
<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/laravel-tutorials/Program-6/");
?>
```

## How to Run

To run this PHP login system, follow these steps:

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

## Contributing

Contributions are welcome! If you have suggestions for improvements or additional features, feel free to open
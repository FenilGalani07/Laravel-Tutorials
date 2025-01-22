# PHP Abstract Class and Interface Example

## Introduction

Welcome to the **PHP Abstract Class and Interface Example** repository! This project demonstrates the use of abstract classes and interfaces in PHP. It showcases how to define an abstract class with abstract methods, implement those methods in derived classes, and use interfaces to enforce a contract for classes. This example is designed for beginners to understand the concepts of abstraction and interfaces in object-oriented programming.

## Repository Link

You can find the repository here: [PHP Abstract Class and Interface Example](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  

GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Features

- **Abstract Classes**: Demonstrates how to create an abstract class with abstract methods.
- **Inheritance**: Shows how derived classes can implement the abstract methods.
- **Interfaces**: Illustrates how to define an interface and implement it in classes.
- **Dynamic Method Calls**: Displays how to call methods from instantiated objects.

## Code Overview

### Abstract Class Example (employee.abstract.php)

This file demonstrates the use of an abstract class `Employee` and its derived classes `Home` and `Office`.

```php
<?php

abstract class Employee {
    protected $uid;
    protected $cc;

    abstract public function display($u, $c);

    public function info() {
        echo "<br/>I am called from Employee abstract class";
    }
}

class Home extends Employee {
    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "Employee ID: $this->uid <br>";
        echo "Credit Card Number: $this->cc <br>";
    }
}

class Office extends Employee {
    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "EID: $this->uid <br>";
        echo "CC: $this->cc <br>";
    }
}

$home = new Home();
$office = new Office();
$home->display("aaaa-bbbb-cccc", "1111-2222-3333-4444");
$office->display("aaaa-bbbb-cccccc", "4444-5555-6666-7777");
$home->info();
$office->info();
?>
```

### Interface Example (employee.interface.php)

This file demonstrates the use of an interface `Employee` and its implementations in the `Home` and `Office` classes.

```php
<?php

interface Employee {
    public function display($u, $c);
    public function info();
}

class Home implements Employee {
    protected $uid;
    protected $cc;

    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "Employee ID: $this->uid <br>";
        echo "Credit Card Number: $this->cc <br>";
    }

    public function info() {
        echo "Inside info() - Home<br>";
    }
}

class Office implements Employee {
    protected $uid;
    protected $cc;

    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "EID: $this->uid <br>";
        echo "CC: $this->cc <br>";
    }

    public function info() {
        echo "I am called info() from Office<br>";
    }
}

$home = new Home();
$office = new Office();
$home->display("aaaa-bbbb-cccc", "1111-2222-3333-4444");
$office->display("aaaa-bbbb-cccccc", "4444-5555-6666-7777");
?>
```

## How to Run

To run this PHP abstract class and interface example, follow these steps:

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
   Open your web browser and go to `http://localhost:8000/employee.abstract.php` or `http://localhost:8000/employee.interface.php` to view the output.

## Contributing

Contributions are welcome! If you have suggestions for improvements or additional features, feel free to open an issue
# PHP Class Inheritance Example

## Introduction

Welcome to the **PHP Class Inheritance Example** repository! This project demonstrates the concept of class inheritance in PHP, showcasing how a derived class (Employee) can extend the functionality of a base class (Person). The example includes constructors, property initialization, and method overriding.

## Repository Link

You can find the repository here: [PHP Class Inheritance Example](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  

GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Features

- **Class Inheritance**: Demonstrates how to create a derived class that inherits properties and methods from a base class.
- **Constructors**: Shows how constructors can be used in both base and derived classes.
- **Method Overriding**: Illustrates how methods can be overridden in derived classes.

## Code Overview

### Main File (index.php)

This file demonstrates the instantiation of the `Employee` class and calls the `displayDetails` method.

```php
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
```

### Person Class (Person.class.php)

This class serves as the base class with properties for PAN, Aadhar, and Bank details, along with a constructor and a method to display details.

```php
<?php
class Person {
    public $pan;
    public $aadhar;
    public $bank;

    public function __construct($pan, $aadhar, $bank) {
        echo "Person class constructor called";
        $this->pan = $pan;
        $this->aadhar = $aadhar;
        $this->bank = $bank;
    }

    public function displayDetails() {
        echo "<br/>PAN: ". $this->pan . "<br>";
        echo "<br/>Aadhar: ". $this->aadhar . "<br>";
        echo "<br/>Bank: ". $this->bank . "<br>";
    }
}
?>
```

### Employee Class (Employee.class.php)

This class extends the `Person` class and includes its own constructor.

```php
<?php
require_once 'Person.class.php';

class Employee extends Person {
    public function __construct() {
        echo "I am called from Employee Class";
    }
}
?>
```

## How to Run

To run this PHP class inheritance example, follow these steps:

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

   Open your web browser and go to `http://localhost:8000/index.php` to view the output.

## Contributing

Contributions are welcome! If you have suggestions for improvements or additional features, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.


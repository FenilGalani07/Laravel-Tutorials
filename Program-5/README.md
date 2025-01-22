# PHP Foreach Loop Example

## Introduction

Welcome to the **PHP Foreach Loop Example** repository! This project showcases how to use the `foreach` loop in PHP to iterate over arrays and display data dynamically. It includes examples of displaying a list of fruits and employee data in a structured table format using Bootstrap for styling.

## Repository Link

You can find the repository here: [PHP Foreach Loop Example](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  

GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Features

- **Dynamic Data Display**: Learn how to display data from arrays using the `foreach` loop.
- **Bootstrap Integration**: The project uses Bootstrap for responsive and modern styling.
- **String Manipulation**: Demonstrates basic string functions in PHP.

## Code Overview

### Fruits List Example

This section demonstrates how to use a `foreach` loop to display a list of fruits.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
</head>
<body>
    <h1>Foreach Loop</h1>
    <ul>
        <?php
            $fruits = array("apple", "banana", "cherry", "date");
            foreach($fruits as $fruit){
                echo "<li>$fruit</li>";
            }
       ?>
    </ul>
    <a href="index.php">Back to Index</a>
</body>
</html>
```

### Employee Data Table Example

This section demonstrates how to display employee data in a Bootstrap-styled table.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Foreach Loop</h1>
        <table class="table table-sm table-striped table-bordered table-hover">
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
                include_once 'data.php'; 
                foreach ($employeesData as $employee) {
                    $employee['first_name'] = str_replace("Dennie", "Harsh", $employee['first_name']);
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
        <a href="index.php">Back to Index</a>
    </div>
</body>
</html>
```

## How to Run

To run this PHP script, follow these steps:

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

   Open your web browser and go to `http://localhost:8000` to view the application.

## Contributing

Contributions are welcome! If you have suggestions for improvements or additional examples, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.


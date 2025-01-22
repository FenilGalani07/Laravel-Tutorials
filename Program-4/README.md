## PHP Array Loop Example

## Introduction

This repository contains a simple PHP script that demonstrates how to iterate over an array using a `for` loop. It serves as a basic example for beginners to understand array handling and looping in PHP.

## Repository Link

You can find the repository here: [PHP Array Loop Example](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  

GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Code Overview

The following PHP code is included in this repository:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $a = array(1, 2, 3, 4, 5, 6, 7);
        for($i = 0; $i < count($a); $i++) {
            echo $a[$i] . "<br>";
        }
    ?>
</body>
</html>
```

### Explanation

- **Array Initialization**: An array `$a` is created containing numbers from 1 to 7.
- **For Loop**: A `for` loop iterates through the array, and each element is printed on a new line using `<br>` for line breaks.

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
   You can run the script using a local server or PHP command line:
   ```bash
   php your_script_name.php
   ```

## Contributing

Contributions are welcome! If you have suggestions for improvements or additional examples, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

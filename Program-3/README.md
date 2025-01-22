# PHP Array Example

## Introduction

This repository contains a simple PHP script that demonstrates basic control structures, including conditional statements and loops. It serves as a basic example for beginners to understand how PHP handles arrays and control flow.

## Repository Link

You can find the repository here: [PHP Array Example](https://github.com/FenilGalani07/Laravel-Tutorials.git)

## Author

**Fenil Galani**  
GitHub: [FenilGalani07](https://github.com/FenilGalani07)

## Code Overview

The following PHP code is included in this repository:

```php
<?php

$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$i = 0;

if (0) {
    echo "Hello";
} else {
    echo "World";
}

do {
    echo $a[$i++];
} while (0);
?>
```

### Explanation

- **Array Initialization**: An array `$a` is created containing numbers from 1 to 10.
- **Conditional Statement**: The `if` statement checks a condition (which is always false in this case), leading to the output of "World".
- **Do-While Loop**: The `do-while` loop is executed only once due to the condition being `0`, which results in no output from the loop.

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
   You can run the script using the PHP command line:
   ```bash
   php your_script_name.php
   ```

## Contributing

Contributions are welcome! If you have suggestions for improvements or additional examples, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.


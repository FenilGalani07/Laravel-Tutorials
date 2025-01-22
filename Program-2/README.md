# PHP Calculator with Constructor

A simple PHP calculator program that allows users to perform basic arithmetic operations (addition, subtraction, multiplication, and division) using a constructor. The program accepts two numbers and an operation through an HTML form and directly calculates the result upon creating the `Calculator` object.

## Features

- Perform addition, subtraction, multiplication, and division operations.
- Handles division by zero error.
- Validates inputs to ensure they are numeric.
- Operations are performed when an object is instantiated.

## Installation

To set up this project locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/FenilGalani07/Laravel-Tutorials.git `

1.  Navigate to the program folder:

    bash

    Copy code

    `cd laravel-tutorials/Program-2`

2.  Make sure you have PHP installed on your local machine.

3.  Run the PHP built-in server:

    bash

    Copy code

    `php -S localhost:8000`

4.  Open your browser and go to:

    arduino

    Copy code

    `http://localhost:8000`

Usage
-----

The program provides an HTML form with three fields:

-   **First Number**: Enter the first number for the operation.
-   **Second Number**: Enter the second number for the operation.
-   **Operation**: Enter one of the following operations: `+`, `-`, `*`, `/`.

Once you submit the form, the result will be displayed below the form.

### Example

-   First number: `10`
-   Second number: `5`
-   Operation: `*`

Result: `50`

Code Explanation
----------------

-   **Calculator Class**:
    -   Contains methods for each arithmetic operation (`add`, `subtract`, `multiply`, `divide`).
    -   The operations are executed inside the constructor of the `Calculator` class, which takes the input values and the selected operation.
-   **Form**: An HTML form collects the user inputs and sends them to the server to create a `Calculator` object and perform the operation.

Contributing
------------

1.  Fork the repository.
2.  Create a new branch (`git checkout -b feature-name`).
3.  Make your changes and commit them (`git commit -am 'Add new feature'`).
4.  Push to the branch (`git push origin feature-name`).
5.  Open a pull request.

License
-------

This project is licensed under the MIT License - see the LICENSE file for details.

Contact
-------

If you have any questions, feel free to reach out to me through GitHub or email me at fenilgalani111@gmail.com.

Acknowledgments
---------------

-   Thanks to [Bootstrap](https://getbootstrap.com/) for the frontend design.
-   Thanks to the PHP community for their great documentation and resources.

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Include the Calculator class
        require_once 'calculator.php';

        // Retrieve input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Create an object of the Calculator class
        $calculator = new Calculator();

        // Perform calculation based on selected operation
        if ($operation == 'add') {
            $result = $calculator->add($num1, $num2);
        } elseif ($operation == 'subtract') {
            $result = $calculator->subtract($num1, $num2);
        } elseif ($operation == 'multiply') {
            $result = $calculator->multiply($num1, $num2);
        } elseif ($operation == 'divide') {
            $result = $calculator->divide($num1, $num2);
        }
    }
    ?>

    <?php if (isset($result)) { // Display result if available 
    ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php } ?>

    <?php
    class Calculator
    {
        public function add($num1, $num2)
        {
            return $num1 + $num2;
            echo "added";
        }

        public function subtract($num1, $num2)
        {
            return $num1 - $num2;
        }

        public function multiply($num1, $num2)
        {
            return $num1 * $num2;
        }

        public function divide($num1, $num2)
        {
            // Check if dividing by zero
            if ($num2 == 0) {
                return "Error: Cannot divide by zero!";
            }
            return $num1 / $num2;
        }
    }

    // // Create an object of the Calculator class
    // $calculator = new Calculator();

    // // Call the add() method to perform addition
    // $result = $calculator->add(5, 3);
    // echo  $result; // Output: 5 + 3 = 8
    // echo "<br/>";

    // // Call the subtract() method to perform subtraction
    // $result = $calculator->subtract(10, 4);
    // echo "10 - 4 = " . $result; // Output: 10 - 4 = 6

    // echo "<br/>";

    // // Call the multiply() method to perform multiplication
    // $result = $calculator->multiply(2, 6);
    // echo "2 x 6 = " . $result; // Output: 2 x 6 = 12

    // echo "<br/>";

    // // Call the divide() method to perform division
    // $result = $calculator->divide(15, 3);
    // echo "15 / 3 = " . $result; // Output: 15 / 3 = 5

    // echo "<br/>";


    ?>

</body>

</html>
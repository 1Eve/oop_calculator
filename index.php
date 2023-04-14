<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Simple Calculator</h1>
  <form method="post" action="calculator.php">
    <label for="num1">Enter number 1</label>
    <input type="number" name="num1" id="num1" required>
    <label for="num2">Enter number 2</label>
    <input type="number" name="num2" id="num2" required>
    <select name="operation">
      <option value="add">Add</option>
      <option value="subtract">Subtract</option>
      <option value="multiply">Multiply</option>
      <option value="divide">Divide</option>
    </select>
    <input type="submit" value="Calculate">
  </form>

  <h2></h2>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include the Calculator class
    require 'calculator.php';

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

  <?php if (isset($result)) { // Display result if available ?>
    <h2>Result: <?php echo $result; ?></h2>
  <?php } ?>
</body>
</html>

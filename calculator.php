<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
<h1>CALCULATOR</h1>
<form method="get" action="">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" id="number1" step="any" required>
        <br><br>
        <label for="number2">Number 2:</label>
        <input type="number" name="number2" id="number2" step="any" required>
        <br><br>
        <label>Operation:</label>
        <input type="radio" name="operation" id="add" value="add" required>
        <label for="add">Addition</label>
        <input type="radio" name="operation" id="subtract" value="subtract" required>
        <label for="subtract">Subtraction</label>
        <input type="radio" name="operation" id="multiply" value="multiply" required>
        <label for="multiply">Multiplication</label>
        <input type="radio" name="operation" id="divide" value="divide" required>
        <label for="divide">Division</label>
        <br><br>
        <input type="submit" value="Calculate">
    </form>

<?php
    $num1 = floatval($_GET["number1"]);
    $num2 = floatval($_GET["number2"]);
    $operationType = $_GET["operation"];
    $result = "";
    switch($operationType) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if($num2 != 0) {
                $result = $num1 / $num2;
            }else{
                $result = "Division by zero not allowed";
            }
            break;
        default:
            $result = "Operation Selection Failed";
            break;
    }
    //output result here
    echo "<h2>Result: $result</h2>";

?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
<h1>CALCULATOR OUTPUT</h1>
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
    $output = htmlentities($result);
    echo "Result: $output";

?>
    
</body>
</html>
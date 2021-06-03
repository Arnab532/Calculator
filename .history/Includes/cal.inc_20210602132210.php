<?php
include 'class-autoload.inc.php';

$operator = $_POST["operator"];
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

$cal = new Cal($operator,$num1,$num2);

try {
    echo $cal->calculator();
} catch (TypeError $e) {
    echo "Error!: " .$e->getMessage();
}

?>
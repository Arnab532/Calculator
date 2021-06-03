<?php
include 'class-autoload.inc.php';

$operator = $_POST["operator"];
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

$calculator = new Calculator($operator,$number1,$number2);

try {
    echo $cal->calculator();
} catch (TypeError $e) {
    echo "Error!: " .$e->getMessage();
}

?>
<?php

 include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculetor</title>
</head>
<body>
    <form action="">
        <h1>Calculetor</h1>
        <input type="number" name="number1" placeholder="First">
        <select name="operator">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="number2" placeholder="Second">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>
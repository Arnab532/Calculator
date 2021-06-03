<?php

 include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="includes/cal.inc.php" method = "post"">
        <h1>Calculetor</h1>
        <input type="number" name="number1" placeholder="First">
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="mul">*</option>
        </select>
        <input type="number" name="number2" placeholder="Second">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>
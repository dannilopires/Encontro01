<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de exercícios - PHP</title>
</head>
<body>
<form action=" " method="get">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="submit" value="avaliar">
</form> 

<?php

    if (($_GET["num1"]) < ($_GET["num2"])) {
        echo $_GET["num1"] . " " . $_GET["num2"];
    } else {
        echo $_GET["num2"] . " " . $_GET["num1"];
    }

?>

</body>
</html>
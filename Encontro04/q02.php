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
    <input type="text" name="numero">
    <input type="submit" value="calcular">
</form> 

<?php

if (isset ($_GET["numero"]) == true){
    for ($i; $i<=10; $i++) {
        echo $_GET["numero"] . "x" . $i . "=" . $_GET["numero"] * $i . "<br>";
    }
};

?>
    
</body>
</html>
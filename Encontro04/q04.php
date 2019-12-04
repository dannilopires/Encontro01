<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action=" " method="get">
    <input type="text" name="numero1">
    <input type="text" name="operacao">
    <input type="text" name="numero2"> 
    <input type="submit" value="calcular"> 
</form> 

<?php
$num1 = $_GET["numero1"];
$num2 = $_GET["numero2"];

if ($_GET["operacao"] == "+") {
    echo soma($num1, $num2);
} elseif ($_GET["operacao"] == "-") {
    echo sub($num1, $num2);
    } elseif ($_GET["operacao"] == "*") {
        echo multi($num1, $num2);
      } else {
            echo divisao($num1, $num2);
        }

function soma(int $num1, int $num2){
    return $_GET["numero1"] + $_GET["numero2"];
}

function sub(int $num1, int $num2){
    return $_GET["numero1"] - $_GET["numero2"];
}

function multi(int $num1, int $num2){
    return $_GET["numero1"] * $_GET["numero2"];
}

function divisao(int $num1, int $num2){
    return $_GET["numero1"] / $_GET["numero2"];
}

?>

</body>
</html>
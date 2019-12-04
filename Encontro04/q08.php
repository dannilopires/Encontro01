<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de exercícios - PHP</title>
</head>
<body>

<form action="" method="get">
    <label> NOTA 1 </label><input type="text" name="nota1">
    <label> NOTA 2 </label><input type="text" name="nota2">
    <label> NOTA 3 </label><input type="text" name="nota3">
    <input type="submit" value="calcular média">
</form>

<?php

$notas = array($_GET["nota1"], $_GET["nota2"], $_GET["nota3"]);
$media = ($notas[0] + $notas[1] + $notas[2])/3;

if ($_GET["nota1"]==null and ($_GET["nota2"])==null and ($_GET["nota3"]) == null) {
    echo "Preencha todos os campos";
} else {
    if ($media >= 6){
        echo "N1 =  " . $notas[0] . " | N2 = " . $notas[1] . " | N3 = " . $notas[2] . " | MG = " . $media . " [APROVADO]";
    } else {
        echo "REPROVADO";
    }    
}
?>



</body>
</html>
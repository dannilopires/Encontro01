<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Exercícios - PHP</title>
</head>
<body>

<form action=" " method="get">
    <input type="text" name="numero">
    <input type="submit" value="verificar">
</form> 

<?php
if (isset ($_GET["numero"]) == true){

    if ($_GET["numero"]>0){
        echo "valor positivo";
    }   
    elseif ($_GET["numero"]<0) {
        echo "valor negativo";
    }
    else {
        echo "igual a zero ou, então, igual a qualquer outro valor não-numérico";
    }
};
?>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
	<input type="text" name="numero">
	<input type="submit" value="verificar">
</form>

<?php
if (($_GET['numero']) % 2 == 0) {
	echo "par";
}
else {
	echo "ímpar";
} 
?>
    
</body>
</html>
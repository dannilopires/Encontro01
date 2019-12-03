<!DOCTYPE html>
<html>
<head>
<style>
table {
  border: 1px solid white;
}

th, #produtotable, #quantidade, #valoruni, #vtotal {
	background-color: black;
	color: white;
}

#produtotable {
 	text-align: left;
}


#quant, #vlor {
    text-align: center;
}

tr:hover {
 	cursor: pointer;
 	background-color: yellow;
}

#nome {
    text-align: left;
}

</style>
</head>
<body>

<!-- nível geral deve ser uma coluna fixa: ng=soma dos critérios -->

<form action="" method="post">
    <label>colaborador</label><input type="text" name="product" id="produto"> 
    <br>
    <label>habilidade</label><input type="text" name="quantity" id="qtd"> 
    <br>
    <label>conhecimento</label><input type="text" name="vlor" id="valor">
    <button type="submit" value="add" onclick="adicionar()"> add </button>
    <form method="post">
        <button name="deletar">deletar</button>
    </form>
<form>

<input type="text" value="add col" id="nova"> <button type="button" onclick="adicionarColuna()"> add col </button>

<br>
<br>

<div>Competência</div>
<table id="myTable" width="100%" cellspacing='0' cellpadding='5'> 
<tr id="row">
  <th id="produtotable" style="width:90%" > colaborador </th>
  <th id="quantidade" style="width:30%" > Habilidade </th>
  <th id="valoruni" style="width:110%" > Conhecimento </th>
  <th id="vtotal" style="width:90%" > Valor Total </th>
</tr>
     
<br>

<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "testando_php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} /*else {
    echo "Connected successfully";
}*/

// prepare and bind
$stmt = $conn->prepare("INSERT INTO produto (nome, quantidade, valor) VALUES (?, ?, ?)");
// set parameters and execute
$produto = filter_input(INPUT_POST, "product");
$quantidade = filter_input(INPUT_POST, "quantity");
$valor = filter_input(INPUT_POST, "vlor"); 

$stmt->bind_param("sii", $produto, $quantidade, $valor);
$stmt->execute();

$sql = "SELECT id, nome, quantidade, valor FROM produto";
$result = $conn -> query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td id='nome'>" . $row["nome"] . "</td><td id='quant'>" . $row["quantidade"] . "</td><td id='vlor'>" . $row["valor"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultado";
}


if(isset($_POST['deletar'])){
    $sql = "DELETE * FROM produto WHERE ";
    $result = $conn -> query($sql);

}


$stmt->close();
$conn->close();
?>

<button onclick="adicionar()">Adicionar</button>

<button onclick="deletar()">Excluir</button>

<button onclick="deletarCol()"> del col </button>



<script>
function adicionar() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var produto = document.getElementById("produto").value;
  var qtd = parseInt(document.getElementById("qtd").value);
  var vlor = parseInt(document.getElementById("valor").value); 
  
  
 // cell1.style.backgroundColor = "white";
  //cell2.style.backgroundColor = "white";
 // cell3.style.backgroundColor = "white";
 // cell4.style.backgroundColor = "white";
  
  //cell1.style.border = "1px solid black";
  //cell2.style.border = "1px solid black";
  //cell3.style.border = "1px solid black";
  //cell4.style.border = "1px solid black";
  
  cell1.style.color = "black";
  cell2.style.color = "black";
  cell3.style.color = "black";
  cell4.style.color = "black";
  
  cell1.style.textAlign = "left";
  cell2.style.textAlign = "center";
  cell3.style.textAlign = "center";
  cell4.style.textAlign = "center";
  
  cell1.innerHTML = produto;
  cell2.innerHTML = qtd;
  cell3.innerHTML = vlor;
  cell4.innerHTML = qtd * vlor;
  
  
  /*var cell1 = document.createElement("TD");
  var produto = document.getElementById("produto").value;
  var cell2 = document.createElement("TD");
  var qtd = document.getElementById("qtd").value;
  var cell3 = document.createElement("TD");
  var vlor = document.getElementById("valor").value;
  
  cell1.style.colspan = "2";
  cell2.style.width= "90px";
 
  row.appendChild(cell1).innerHTML = produto;
  row.appendChild(cell2).innerHTML = qtd;
  row.appendChild(cell3).innerHTML = vlor;
  */
  
  select();
}
 
function adicionarColuna() {
	var table = document.getElementById("row");
	var column = document.createElement("TH");
	var nome = document.getElementById("nova").value;
	
	column.style.textAlign="center";
	column.style.color = "white";
	column.style.bgColor = "black";
	
	table.appendChild(column).innerHTML = nome;
}

function select(){
	var rIndex;
	var table = document.getElementById("myTable");
	for (var i=0; i < table.rows.length; i++) {
		table.rows[i].onclick = function() {
			rIndex = this.rowIndex;
			//console.log(rIndex);
			document.getElementById("produto").value = this.cells[0].innerHTML;
			document.getElementById("qtd").value = this.cells[1].innerHTML;
			document.getElementById("valor").value = this.cells[2].innerHTML;
			};
	}
}

select();

function deletar() {
  document.getElementById("myTable").deleteRow(1);
}

function deletarCol() {
  document.getElementById("row").deleteCell(-1);

}
</script>

</body>
</html>



let lista=[];

function adicionar() {
    let x = lista.push(document.getElementById("tarefa").value);
    console.log(lista);
    var table = document.getElementById("tabela");
    var row = table.insertRow(2);
    var cell1 = row.insertCell(0);
    cell1.innerHTML = lista[x];
}

function remover(params) {
        
}

function atualizar(params) {
        
}

    
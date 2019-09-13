function somar(){
    let num1 = document.getElementById("soma-1").value;
    let num2 = document.getElementById("soma-2").value;
    let resultado = parseFloat(num1) + parseFloat(num2);

    document.getElementById("resultado").value = resultado;
}

function changetogreen(){
    document.querySelector("body").bgColor = "green";
}

function changetored(){
    document.querySelector("body").bgColor = "red";
}

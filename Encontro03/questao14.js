
let num1 = parseFloat(document.getElementById("soma1").value);
let num2 = parseFloat(document.getElementById("soma2").value);
let resultado = soma(num1, num2);
document.getElementById("resultado-soma").innerHTML = resultado;

function soma(num1, num2) {
    return num1 + num2; 
}

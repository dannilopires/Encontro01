function cpf(){
    let cpf = document.getElementById("cpf").value;
    let num1 = cpf.slice(0,3);
    let num2 = cpf.slice(3,6);
    let num3 = cpf.slice(6,9);
    let num4 = cpf.slice(9,11);
    let cpfPunct = num1 + "." + num2 + "." + num3 + "-" + num4;
    
    document.getElementById("demo").innerHTML = cpfPunct;
} 

function cpfSem(){
    let cpf = document.getElementById("cpfPoint").value;
    let num1 = cpf.slice(0,3);
    let num2 = cpf.slice(4,7);
    let num3 = cpf.slice(8,11);
    let num4 = cpf.slice(12,14);
    let cpfNum = num1 + num2 + num3 + num4;

    document.getElementById("sem").innerHTML = cpfNum;
}
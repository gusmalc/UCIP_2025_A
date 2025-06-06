let num1 = document.getElementById("num1");
let num2 = document.getElementById("num2");
let btn_sumar = document.getElementById("btn_sumar");
let btn_borrar = document.getElementById("btn_borrar");
let resultado = document.getElementById("resultado");


btn_sumar.addEventListener("click", function(ev){
    ev.preventDefault();
    
    let n1 = parseInt(num1.value);
    let n2 = parseInt(num2.value);
    let r = n1 + n2;
    if(isNaN(r)) {
        resultado.innerHTML = "Escribí números cabezón";
    }else{
       resultado.innerHTML = r; 
    }
    //resultado.innerHTML = r;
})

btn_borrar.addEventListener("click", function() {
    resultado.innerHTML = "";
})
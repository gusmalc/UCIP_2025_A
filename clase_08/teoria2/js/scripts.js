let caja1 = document.getElementById("caja1");
let btn1 = document.getElementById("btn1");
let btn2 = document.getElementById("btn2");
let btn3 = document.getElementById("btn3");
let btn4 = document.getElementById("btn4");
let estilo = document.getElementById("estilo");

btn1.addEventListener("click", () => {
    //caja1.style.background = "#f00";
    //caja1.style.color = "#fff";
    caja1.style.cssText = "color: #ccc; font-size: 2rem";
    caja1.classList.add("fondo_verde");
})

btn2.addEventListener("click", () => {
    caja1.classList.remove("fondo_verde");
})
btn3.addEventListener("click", () => {
    caja1.classList.toggle("fondo_verde");
})

let modo = "claro";

btn4.addEventListener("click", () => {
    if(modo == "claro"){
        estilo.href = "css/oscuro.css";
        btn4.innerHTML = "MODO CLARO";
        modo = "oscuro";
    }else{
        estilo.href = "css/claro.css";
        btn4.innerHTML = "MODO OSCURO";
        modo = "claro";
    }
    
})





// el.style.cssText = "background-color: #222; color: #fff;";
// el.style.border = "#000 solid 2px";
// el.classList.add("clase1", "clase2");
// el.classList.remove("clase");
// el.classList.toggle("clase");
// document.getElementById("estilo").href = "css/estilosjs.css";
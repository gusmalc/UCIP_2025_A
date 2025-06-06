// let btn1 = document.getElementById("btn1");
let btn1 = document.querySelector("#btn1");
let resultado = document.getElementById("resultado");
let palabras = document.querySelectorAll(".palabra");

let frase_formada = false;
btn1.addEventListener("click", (e) => {
    e.preventDefault();
    if (!frase_formada) {
        crear_frase();
    }else{
        iniciar();
    }
    
});


function crear_frase(){
    let frase = "";
    palabras.forEach((d, i) => {
      let valor = d.value;
      //frase = frase + valor + " ";
      // frase += valor + " ";
      frase += `${valor} `;      
    });
    //console.log(frase);
    resultado.innerHTML = frase;
    resultado.style.cssText = "background: #222; color: #fff";
    document.body.style.background = "#ccc";
    btn1.classList.add("btn-danger");
    btn1.innerHTML = "INICIAR";
    palabras.forEach((d, i) => {
      d.disabled = true;     
    });
    frase_formada = true;
}

function iniciar(){
resultado.innerHTML = "";
resultado.style.cssText = "background: #fff; color: #222";
document.body.style.background = "#fff";
btn1.classList.remove("btn-danger");
btn1.innerHTML = "Formar Frase";
palabras.forEach((d, i) => {
      d.disabled = false; 
      d.value = "";    
    });
    frase_formada = false;
}



// el.style.cssText = "background-color: black; color: white;";
// el.style.border = "#000 solid 2px";
// el.classList.add("clase1", "clase2");
// el.classList.remove("clase");
// el.classList.toggle("clase");
// document.getElementById("estilo").href = "css/estilosjs.css";
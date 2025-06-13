let tablero = document.getElementById("tablero");
let visor = document.getElementById("visor");
let resultado = document.getElementById("resultado");
let color = document.getElementById("color");

let contenido_visor = "";

let nn = 0;
tablero.addEventListener("click", (e) => {
    
    if(e.target.id != "tablero") {
         let tt = e.target.dataset.numero;
        // if(nn == 2 || nn == 4){
        //     val_visor += " - ";
        // }
        nn++;
        contenido_visor += tt;
        // val_color += tt;
        visor.innerHTML = contenido_visor;
        if(contenido_visor.length == 6){
            color.style.background = `#${contenido_visor}`;
            resultado.innerHTML = `#${contenido_visor}`;
            //val_color = "";
            contenido_visor = "";
            nn = 0;
        }
        
    }



});
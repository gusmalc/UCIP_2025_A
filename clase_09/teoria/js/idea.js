// let ran = Math.random(); // numero entre 0 y 1
// let min = 1; // incluido
// let max = 11; // excluido
// console.log(Math.random() * (max - min) + min); // con decimales
// console.log(Math.floor(Math.random() * (max - min)) + min); // sin decimales

let app = document.getElementById("app");

let nx = 1;
function crear_div(){
    let min = 0; // incluido
    let max = 256; // excluido

    let rr = Math.floor(Math.random() * (max - min)) + min;
    let gg = Math.floor(Math.random() * (max - min)) + min;
    let bb = Math.floor(Math.random() * (max - min)) + min;

    let d = `
        <div style="background: rgb(${rr}, ${gg}, ${bb})">
            ${nx}
        </div>
    `;

    return d;
}

let nint = 0;
let contenido = "";

let inter = setInterval(function(){    
    contenido += crear_div();
    app.innerHTML = contenido;
    nx++;
    //console.log(contenido);
    nint++;
    if(nint==10){
        
        clearInterval(inter);
        nint = 0;
        
    }
}, 400);

// console.log(contenido);
// app.innerHTML = contenido;
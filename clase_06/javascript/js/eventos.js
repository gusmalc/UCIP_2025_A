let btn1 = document.getElementById("btn1");
let nombre = document.getElementById("nombre");
let titulo = document.getElementById("titulo");
//alert(btn1.id);
//console.log(btn1);

// btn1.addEventListener("click", function(){
//     alert("HOLA");
// })

btn1.addEventListener("click", saludo);



function saludo(){
   let a = nombre.value ;
   let b = titulo.dataset.version;
    
    console.log(b);
    alert(a);
}

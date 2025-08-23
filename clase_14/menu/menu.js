
let btn_menu = document.getElementById("btn_menu");
let contenido_menu = document.getElementById("contenido_menu");
let mascara = document.getElementById("mascara");

btn_menu.addEventListener("click", function(e){
    contenido_menu.classList.toggle("abrir_menu");
});

window.addEventListener("scroll", function(e){
    contenido_menu.classList.remove("abrir_menu");
})


window.addEventListener("load", function(e){
    setTimeout(function(){
         mascara.style.display = "none";
    },200);
   
})


// el.style.cssText = "background-color: black; color: white;";
// el.style.border = "#000 solid 2px";
// el.classList.add("clase1", "clase2");
// el.classList.remove("clase");
// el.classList.toggle("clase");
// document.getElementById("estilo").href = "css/estilosjs.css";
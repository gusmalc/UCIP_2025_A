let btn1 = document.getElementById("btn1");
let contenido = document.getElementById("contenido");


btn1.addEventListener("click", () => {
    fetch('elementos/parte.php')
    .then(res=> res.text() )
    .then(el =>{
        contenido.innerHTML = el;
    })
    .catch(err=>{ console.log(err.message) });
})
let aviso = document.getElementById("aviso");
let btn_enviar = document.getElementById("btn_enviar");
let nombre = document.getElementById("nombre");
let email = document.getElementById("email");
let telefono = document.getElementById("telefono");
let consulta = document.getElementById("consulta");
aviso.style.display = "none";


btn_enviar.addEventListener("click", function(e) {
    e.preventDefault();
    enviar_datos();
})


function enviar_datos(){
    let api_url = "enviar_mail.php";
    let data = new FormData();
    data.append("nombre", nombre.value);
    data.append("email", email.value);
    data.append("telefono", telefono.value);
    data.append("consulta", consulta.value);
    fetch(api_url, { method: "post", body: data })
    .then(res => res.text())
    .then(el => {
        console.log(el);
        if(el.trim() == "ok"){
            aviso.style.display = "block";
        }
    })
    .catch(err => { console.log(err.message) });
}
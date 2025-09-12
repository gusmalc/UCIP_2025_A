let btn1 = document.getElementById("btn1");
let lista = document.getElementById("lista");
let texto = document.getElementById("texto");
let edad_x = document.getElementById("edad");

window.onload = function () {
  edad_x.value = "";
};

btn1.addEventListener("click", function () {
  carga_lista();
});

edad_x.addEventListener("beforeinput", (e) => {
  // si es borrar, cortar o vaciar, permitir
  if (e.inputType.startsWith("delete")) {
    return;
  }

  // permitir solo dígitos
  if (!/^\d$/.test(e.data)) {
    e.preventDefault();
  }
});

// function carga_lista(){
//     fetch('lista_usuarios.php')
//     .then(res=> res.json() )
//     .then(el =>{
//         crear_tabla(el);
//     })
//     .catch(err=>{ console.log(err.message) });
// }
function carga_lista() {
  if (edad_x.value != "") {
    let api_url = "lista_usuarios.php";
    let data = new FormData();
    data.append("edad", edad_x.value);
    fetch(api_url, { method: "post", body: data })
      .then((res) => res.json())
      .then((el) => {
        crear_tabla(el);
      })
      .catch((err) => {
        console.log(err.message);
      });
  } else {
    alert("Ingresar edad");
  }
}

function crear_tabla(el) {
  let tabla = `
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
        </thead>
        <tbody>
    
    `;

  el.forEach((d, i) => {
    tabla += `
                     <tr onclick="edad(${d.edad})">
                        
                        <td>${d.nombre}</td>
                         <td>${d.apellido}</td>
                    </tr>
                     `;
  });

  tabla += `
    </tbody>
    </table>
    `;

  lista.innerHTML = tabla;
}

function cargar_texto() {
  fetch("texto.php")
    .then((res) => res.text())
    .then((el) => {
      texto.innerHTML = el;
    })
    .catch((err) => {
      console.log(err.message);
    });
}

cargar_texto();

function edad(ee) {
  alert(ee);
}

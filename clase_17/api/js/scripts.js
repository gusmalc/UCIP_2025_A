//let btn1 = document.getElementById("btn1");
let lista = document.getElementById("lista");
let texto = document.getElementById("texto");

// btn1.addEventListener("click", function() {
//     carga_lista();
// })



function carga_lista(){
    fetch('lista_usuarios.php')
    .then(res=> res.json() )
    .then(el =>{
        // console.log(el);
        crear_tabla(el);
    })
    .catch(err=>{ console.log(err.message) });
}


function crear_tabla(el){
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

function cargar_texto(){
    fetch('texto.php')
    .then(res=> res.text() )
    .then(el =>{
       texto.innerHTML = el;
    })
    .catch(err=>{ console.log(err.message) });
}


carga_lista();
cargar_texto();


function edad(ee){
    alert(ee);
}
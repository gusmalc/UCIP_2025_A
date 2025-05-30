
let dias = ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'];



let persona = {
    nombre: "Pedro",
    edad: 30,
    idiomas: ["Español", "Inglés", "Italiano"],
    saluda: function(){
        alert("Hola soy " + this.nombre);
    }
}

function suma(){
    alert("Soy la funcion suma");
}

let elemento = "edad";


//alert(persona[elemento]);

console.log(elemento);

persona.nombre = "Maria";

persona.saluda();
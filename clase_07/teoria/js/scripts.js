

// function suma(a,b){
//     //alert(a+b);
//     return a + b;
// }


//let resultado = suma(5,5);

// let suma = (a,b) => {
//     alert(a+b);
// };

let agrega = a => a+2;

let x = agrega(20);
//alert(x);

let suma = (a,b) => a+b;

let resultado = suma(6,5);

//alert(resultado);

let persona = {
    nombre: "Pedro",
    edad: 30,
    saluda: function() {
        alert("Hola");
    }
}

//alert(persona.nombre);

//persona.saluda();

let dias = ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'];

alert(dias[0]);


dias.forEach((d, i) => {

    //let x = d + " - " + i;

    let x = `${i} ---- ${d} -- Esto es un día`;


    console.log(x);
});
let app = document.getElementById("app");
let btn1 = document.getElementById("btn1");
let titulo = document.getElementById("titulo");

btn1.addEventListener("click", (e) => {
    e.preventDefault();
    crear_lista();
});



function crear_lista() {
    fetch('https://jsonplaceholder.typicode.com/users')
    .then(res => res.json() )
    .then(el =>{
        // console.log(el);
        let = tt = `
            <table class="table table-primary">                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                    </tr>                
                </thead>
                <tbody>`;


                    // <tr>
                    //     <td>aaansjjsjsj</td>
                    //     <td>gsgshhshsh</td>
                    //     <td>hdydyydydy</td>
                    // </tr>
                    // <tr>
                    //     <td>aaansjjsjsj</td>
                    //     <td>gsgshhshsh</td>
                    //     <td>hdydyydydy</td>
                    // </tr>

                    el.forEach((d, i) => {
                     tt += `
                     <tr onclick="carga_ficha(${d.id})">
                         <td>${d.id}</td>
                        <td>${d.name}</td>
                         <td>${d.email}</td>
                    </tr>
                     `;   
                    });



        tt +=  `</tbody>      
            </table>
        `
        app.innerHTML = tt;
        titulo.innerHTML = "Lista Usuarios";
    })
    .catch(err=>{ console.log(err.message) });
}


function carga_ficha(i){
    fetch(`https://jsonplaceholder.typicode.com/users/${i}`)
    .then(res=> res.json() )
    .then(el =>{
        let f = `
        <h1>${el.name}</h1>
        <p>${el.email}</p>
        <p>${el.company.name}</p>
        `;
        app.innerHTML = f;
        titulo.innerHTML = "Ficha Usuario";
    })
    .catch(err=>{ console.log(err.message) });
}

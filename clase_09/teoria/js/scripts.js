let nint = 0;

let inter = setInterval(function(){    
    console.log(nint);
    nint++;
    if(nint==101){
        clearInterval(inter);
        nint = 0;
    }
}, 50);

// setTimeout(function(){
//     alert('ok');
// },4000);

//alert('ok');
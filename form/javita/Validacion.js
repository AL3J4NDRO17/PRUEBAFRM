
var inpc=document.getElementById("d")
var btn=document.getElementById("sub")
inpc.addEventListener("blur", function(evento){
    
var contra1= document.getElementById("c").value

var contra2= document.getElementById("d").value
    evento.preventDefault()
    console.log("ola")

    if(contra1==contra2){
        btn.disabled = false;
    }
    else {
        alert("Sus parametros de contraseña son invalidos")
        btn.disabled = true;
    }

}) 

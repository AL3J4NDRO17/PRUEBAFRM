
var count=0
var frm= document.getElementById("login")
var uss="admin", pss="0000"
frm.addEventListener("submit", function(evento){
    evento.preventDefault()
    var usuario=document.getElementById("a").value
    var contraseña=document.getElementById("b").value
    var btn=document.getElementById("btn").value
    console.log("ola")

    if(uss==usuario && pss==contraseña){
    alert("Se ha logueado correctamente")
    window.location.href="./brujita.PNG"
    }
    else if (count<3){
        count=count+1
        alert("Error en el logueo, intento:"+count)

    }
    else{
        alert("Llego al limite maximo de intentos")
        
    }

}) 
console.log(frm)
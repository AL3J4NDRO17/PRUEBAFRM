console.log("Hola")
var v1,v2,ree;
function saludo(){
   
}
function capturav1(){
    console.log(typeof(v1));
    v1=parseFloat(prompt("Captura el valor 1"));
    console.log("Valor 1:"+v1);
    
}
function capturav2(){
    console.log(typeof(v2));
    v2=parseFloat(prompt("Captura el valor 2"));
    console.log("Valor: "+ v2);
}
function suma(){
    re=v1+v2;
    alert("Su resultado es: "+ re);
}
function resta(){
    re=v1-v2
    alert("Su resultado es: "+ re)
}
function multi(){
    re=v1*v2;
    alert("Su resultado es: "+re)
}
function divi(){
    re=v1/v2;
    alert("Su resultado es: "+re);
}
function raiz(){
    re=Math.sqrt(v1,v2)
    alert("Su resultado es: "+re);
}
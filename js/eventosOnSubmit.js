const formCliente = document.getElementById('formCliente');

formCliente.addEventListener(onsubmit,(e)=>{
document.cookie = "submit=true;";

setTimeout(cookieTroca(), 1000)
})

function cookieTroca(){
document.cookie = "submit=false;"
}
let email = document.getElementById("email");
let filtro     = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

function novaSenha(){
    verificar();
}

function verificar(){
   
    campoEmail = document.querySelector(".erroEmail");
    if(email.value == ""){
        campoEmail.innerHTML = "Favor preencher o campo E-mail";
        contadorCNPJ--;
    }else if(filtro.test(email.value)){
        campoEmail.style.display = "none";
    }else{
        campoEmail.innerHTML = "Formato do E-mail inválido";
        contadorCNPJ--;
    }	
}
//ABA
// let abaCPF     = document.getElementById ("aba1"      );
    
//CPF
let nome       = document.getElementById ("nome"      );
let sobrenome  = document.getElementById ("sobrenome" );
let cpf        = document.getElementById ("cpf"       );
let email      = document.getElementById ("email"     );
let data       = document.getElementById ("data"      );
let usuario    = document.getElementById ("usuario"   );
let senha      = document.getElementById ("senha"     );

//CNPJ    
let cnpj       = document.getElementById ("cnpj"      );
let razao      = document.getElementById ("razao"     );
let inscricao  = document.getElementById ("inscricao" );
let email2     = document.getElementById ("email2"    );
let data2      = document.getElementById ("data2"     );
let usuario2   = document.getElementById ("usuario2"  );
let senha2     = document.getElementById ("senha2"    );

let filtro     = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

function gravarCpf(){
    validarCadastroCpf();
}

function gravarCnpj(){
    validarCadastroCnpj();
}

function validarTecla(){
    evento = window.event;
    let tecla = evento.keyCode;
    digitaCampoNome = document.querySelector(".erroNome");
    digitaCampoSobrenome = document.querySelector(".erroSobrenome");
    
    if(tecla > 47 && tecla < 58){ 
        digitaCampoNome.innerHTML = "É permitido apenas letas nesse campo";
        digitaCampoSobrenome.innerHTML = "É permitido apenas letas nesse campo";
        evento.preventDefault();
    }
}

function validarCadastroCnpj(){
    let contadorCNPJ = 6;

    //CNPJ
    campoCNPJ = document.querySelector(".erroCNPJ");
    if (cnpj.value == '' || cnpj.value.length < 1) {
        campoCNPJ.innerHTML = "Favor preencher o campo CNPJ";
        contadorCNPJ--;
    }

    //RAZÃO
    campoRazao = document.querySelector(".erroRazao");
    if (razao.value == '' || razao.value.length < 1) {
        campoRazao.innerHTML = "Favor preencher o campo Razão Social";
        contadorCNPJ--;
    }

    //INSCRIÇÃO
    campoInscricao = document.querySelector(".erroInscricao");
    if (inscricao.value == '' || inscricao.value.length < 1) {
        campoInscricao.innerHTML = "Favor preencher o campo Inscrição Estadual";
        contadorCNPJ--;
    }

    //E-mail
    campoEmail = document.querySelector(".erroEmail2");
    if(email2.value == ""){
        campoEmail.innerHTML = "Favor preencher o campo E-mail";
        contadorCNPJ--;
    }else if(filtro.test(email2.value)){
        campoEmail.style.display = "none";
    }else{
        campoEmail.innerHTML = "Formato do E-mail inválido";
        contadorCNPJ--;
    }	

    // //Data
    // campoData = document.querySelector(".erroData2");
    // if (data2.value == '' || data2.value.length < 1) {
    //     campoData.innerHTML = "Favor preencher o campo Data";
    //     contadorCNPJ--;
    // }

    //Usuario
    campoUsuario = document.querySelector(".erroUsuario2");
    if(usuario2.value == "" || usuario2.value.length < 1){
        campoUsuario.innerHTML = "Favor preencher o campo Usuario";
        contadorCNPJ--;
    }

    //Senha
    campoSenha = document.querySelector(".erroSenha2");
    if(senha2.value == ""){
        campoSenha.innerHTML = "Favor preencher o campo Senha";
        contadorCNPJ--;
    }else if(senha2.value.length < 6){
        campoSenha.innerHTML = "Favor preencher a Senha com o mínimo de 6 caracteres";
        contadorCNPJ--;
    }

    // if (contadorCNPJ == 6){
    //     window.location = "TelaCadastroProduto.php";
    // }
}


function validarCadastroCpf(){
    let contadorCPF  = 7;

    // if (abaCPF.checked == true){

    //Nome
    campoNome = document.querySelector(".erroNome");
    if(nome.value == ""){
        campoNome.innerHTML = "Favor preencher o campo Nome";
        contadorCPF--;
    }

    //Sobrenome
    campoSobrenome = document.querySelector(".erroSobrenome");
    if(sobrenome.value == ""){
        campoSobrenome.innerHTML = "Favor preencher o campo Sobrenome";
        contadorCPF--;
    }

    //CPF
    campoCPF = document.querySelector(".erroCPF");
    if(cpf.value == "" || cpf.value.length < 1){
        campoCPF.innerHTML = "Favor preencher o campo CPF";
        contadorCPF--;
    }

    //E-mail
    campoEmail = document.querySelector(".erroEmail");
    if(email.value == ""){
        campoEmail.innerHTML = "Favor preencher o campo E-mail";
        contadorCPF--;
    }else if(filtro.test(email.value)){
        campoEmail.style.display = "none";
    }else{
        campoEmail.innerHTML = "Formato do E-mail inválido"; 
        contadorCPF--;
    }	

    //Data
    campoData = document.querySelector(".erroData");
    if (data.value == '' || data.value.length < 1) {
        campoData.innerHTML = "Favor preencher o campo Data";
        contadorCPF--;
    }

    //Usuario
    campoUsuario = document.querySelector(".erroUsuario");
    if(usuario.value == "" || usuario.value.length < 1){
        campoUsuario.innerHTML = "Favor preencher o campo Usuario";
        contadorCPF--;
    }

    //Senha
    campoSenha = document.querySelector(".erroSenha");
    if(senha.value == ""){
        campoSenha.innerHTML = "Favor preencher o campo Senha";
        contadorCPF--;
    }else if(senha.value.length < 6){
        campoSenha.innerHTML = "Favor preencher a Senha com o mínimo de 6 caracteres";
        contadorCPF--;
    }
    
    // if (contadorCPF ==  7){
    //     window.location = "relatorio.php";
    // }
}

function mascara(i,t){   
    let v = i.value;
    
    if(isNaN(v[v.length-1])){
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    if(t == "cpf"){
       i.setAttribute("maxlength", "14");
       if (v.length == 3 || v.length == 7) i.value += ".";
       if (v.length == 11) i.value += "-";
    }
    
    if(t == "cnpj"){
       i.setAttribute("maxlength", "18");
       if (v.length == 2 || v.length == 6) i.value += ".";
       if (v.length == 10) i.value += "/";
       if (v.length == 15) i.value += "-";
    }
}

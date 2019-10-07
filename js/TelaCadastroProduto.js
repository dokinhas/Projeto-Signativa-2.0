//import sabugo from './sabugo.js';

//let id        = document.getElementById ("ID"       );
let sku       = document.getElementById ("SKU"      );
let imagem    = document.getElementById ("imagem"   );
let marca     = document.getElementById ("marca"    );
let nome      = document.getElementById ("nome"     );
let rhlh      = document.getElementById ("rhlh"     );  
let arco      = document.getElementById ("arco"     );
let libragem  = document.getElementById ("libragem" );
let preco     = document.getElementById ("preco"    );

function cadastrar(){
    
    validaCampos();
    window.location = "TelaCadastroProduto.php";
}

function retorno() {

}

function validaCampos(){

    //ID
    // campoID = document.querySelector(".erroID");
    // if (id.value == '' || id.value.length < 1) {
    //     campoID.innerHTML = "Favor preencher o campo ID";
    // }

    //SKU
    campoSKU = document.querySelector(".erroSKU");
    if (sku.value == '' || sku.value.length < 1) {
        campoSKU.innerHTML = "Favor preencher o campo SKU";
    }

    //Imagem
    campoImagem = document.querySelector(".erroImagem");
    if (imagem.value == '' || imagem.value.length < 1) {
        campoImagem.innerHTML = "Favor selecionar a Imagem";
    }

    //Marca
    campoMarca = document.querySelector(".erroMarca");
    if (marca.value == '' || marca.value.length < 1) {
        campoMarca.innerHTML = "Favor preencher o campo Marca";
    }
    
    //Nome
    campoNome = document.querySelector(".erroNome");
    if(nome.value == ""){
        campoNome.innerHTML = "Favor preencher o campo Nome";
    }

    //Libragem
    campoLibragem = document.querySelector(".erroLibragem");
    if (libragem.value == '' || libragem.value.length < 1) {
        campoLibragem.innerHTML = "Favor preencher o campo Libragem";
    }

    //Preço
    campoPreco = document.querySelector(".erroPreco");
    if (preco.value == '' || preco.value.length < 1) {
        campoPreco.innerHTML = "Favor preencher o campo Preço";
    }

    let LHRH = document.getElementById ("rhlh");
    let posicao = LHRH.options[LHRH.selectedIndex].value;

    let arco = document.getElementById ("arco");
    let posicao2 = arco.options[arco.selectedIndex].value;

}

function redirecionar(){
    window.location="relatorio.php";
}

<?php
include_once("Dados.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$lista = Dados::listarLogin();

foreach($lista as $linha){

    if($login === $linha['usuario'] || $login === $linha['email']){
        if($senha === $linha['senha']){
            echo "Login realizado com sucesso";
        }else{
            echo "senha inválida";
        }
    }else{
        echo "login inválido";
    }
    
}
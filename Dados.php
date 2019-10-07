<?php
include_once ("banco.php");
include_once ("Conexao.php");

class Dados{

    public static function listar(){
        $query = "SELECT * FROM Arco ORDER BY id";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public static function listarUsuario(){
        $query = "SELECT f.cpf, f.usuario, f.senha,f.email, j.cnpj, j.usuario, j.senha, j.email
                  FROM PessoaFisica f, PessoaJuridica j";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $listaUsuario  = $resultado->fetchAll();
        return $listaUsuario;
    }

}
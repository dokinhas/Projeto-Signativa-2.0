<?php
include_once ('banco.php');
include_once ('Conexao.php');

class listar{

    public function listar(){
        $query = "SELECT * 
                  FROM produtos ORDER BY id";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listarLogin(){
        $query = "SELECT f.email, f.usuario, f.senha, j.email, j.usuario, j.senha
                  FROM   PessoaFisica f, PessoaJuridica j";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Pessoa(){
        $query = "SELECT f.cpf, j.cnpj
                  FROM   PessoaFisica f, PessoaJuridica j";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}


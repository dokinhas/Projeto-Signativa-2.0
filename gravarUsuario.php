<?php
include_once ('banco.php');
include_once ('Conexao.php');

$nomeCpf        = $_POST['nomeCpf'      ];
$sobrenomeCpf   = $_POST['sobrenomeCpf' ];
$cpfCpf         = $_POST['cpf'          ];
$emailCpf       = $_POST['emailCpf'     ];
$dataCpf        = $_POST['dataCpf'      ];
$usuarioCpf     = $_POST['usuarioCpf'   ];
$senhaCpf       = $_POST['senhaCpf'     ];

if(!$nomeCpf == "" || !$sobrenomeCpf == "" || !$cpfCpf == "" || $dataCpf == "" || !$emailCpf == "" || !$usuarioCpf == "" || !$senhaCpf == ""){

    $query = "INSERT INTO `PessoaFisica` (`nome`, `sobrenome`, `cpf`, `email`, `dataNascimento`, `usuario`, `senha`)
              VALUES                     ('" . $nomeCpf      . "',
                                          '" . $sobrenomeCpf . "',
                                          '" . $cpfCpf       . "',
                                          '" . $emailCpf     . "',
                                          '" . $dataCpf      . "',
                                          '" . $usuarioCpf   . "',
                                          '" . $senhaCpf     . "')";

    $conexao = Conexao::pegarConexao();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':nomeCpf'      , $nomeCpf      ); 
    $stmt->bindValue(':sobrenomeCpf' , $sobrenomeCpf ); 
    $stmt->bindValue(':cpf'          , $cpfCpf       ); 
    $stmt->bindValue(':emailCpf'     , $emailCpf     ); 
    $stmt->bindValue(':dataCpf'      , $dataCpf      ); 
    $stmt->bindValue(':usuarioCpf'   , $usuarioCpf   ); 
    $stmt->bindValue(':senhaCpf'     , $senhaCpf     ); 
    $stmt->execute();
}

header("Refresh: 0; relatorio.php");
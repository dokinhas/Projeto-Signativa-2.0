<?php
include_once ('banco.php');
include_once ('Conexao.php');

$cnpjCnpj        = $_POST['cnpj'          ];
$razaoCnpj       = $_POST['razaoCnpj'     ];
$inscricaoCnpj   = $_POST['inscricaoCnpj' ];
$emailCnpj       = $_POST['emailCnpj'     ];
$usuarioCnpj     = $_POST['usuarioCnpj'   ];
$senhaCnpj       = $_POST['senhaCnpj'     ];


if(!$cnpjCnpj == "" || !$razaoCnpj == "" || !$inscricaoCnpj == "" || !$emailCnpj == "" || !$usuarioCnpj == "" || !$senhaCnpj == ""){
    $query = "INSERT INTO `PessoaJuridica` (`cnpj`, `razao`, `inscricao`, `email`, `usuario`, `senha`)
    VALUES             ('" . $cnpjCnpj      . "',
                        '" . $razaoCnpj     . "',
                        '" . $inscricaoCnpj . "',
                        '" . $emailCnpj     . "',   
                        '" . $usuarioCnpj   . "',
                        '" . $senhaCnpj     . "')";

    $conexao = Conexao::pegarConexao();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':cnpj'            , $cnpjCnpj      );
    $stmt->bindValue(':razaoCnpj'       , $razaoCnpj     );
    $stmt->bindValue(':inscricaoCnpj'   , $inscricaoCnpj );
    $stmt->bindValue(':emailCnpj'       , $emailCnpj     );
    $stmt->bindValue(':usuarioCnpj'     , $usuarioCnpj   );
    $stmt->bindValue(':senhaCnpj'       , $senhaCnpj     );
    $stmt->execute();
    
}

header("Refresh: 0; TelaCadastroProduto.php");
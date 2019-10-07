<?php
include_once ('banco.php');
include_once ('Conexao.php');

//$idProduto        = $_POST['id'         ];
$skuProduto       = $_POST['sku'        ];
$imagemProduto    = $_POST['imagem'     ];
$marcaProduto     = $_POST['marca'      ];
$nomeProduto      = $_POST['nome'       ];
$rhlhProduto      = $_POST['rhlh'       ];
$arcoProduto      = $_POST['arco'       ];
$libragemProduto  = $_POST['libragem'   ];
$precoProduto     = $_POST['preco'      ];

//echo $idProduto       ."<br>";
//echo $skuProduto      ."<br>";
//echo $imagemProduto   ."<br>";
//echo $marcaProduto    ."<br>";
//echo $nomeProduto     ."<br>";
//echo $rhlhProduto     ."<br>";
//echo $arcoProduto     ."<br>";
//echo $libragemProduto ."<br>";
//echo $precoProduto           ;

if(!$skuProduto == "" || !$imagemProduto == "" || !$marcaProduto == "" || !$nomeProduto == "" || !$rhlhProduto =="" || !$arcoProduto == "" || !$libragemProduto == "" || !$precoProduto ==""){

    $query = "INSERT INTO `Arco` (`SKU`, `imagem`, `marca`, `nome`, `Rhlh`, `tipo`, `libragem`, `preco`)
              VALUES             ('" . $skuProduto      . "',
                                  '" . $imagemProduto   . "',
                                  '" . $marcaProduto    . "',
                                  '" . $nomeProduto     . "',
                                  '" . $rhlhProduto     . "',
                                  '" . $arcoProduto     . "',
                                  '" . $libragemProduto . "',
                                  '" . $precoProduto    . "')";

    $conexao = Conexao::pegarConexao();
    $stmt = $conexao->prepare($query);
    //$stmt->bindValue(':id'       , $idProduto       );
    $stmt->bindValue(':sku'      , $skuProduto      );
    $stmt->bindValue(':imagem'   , $imagemProduto   );
    $stmt->bindValue(':marca'    , $marcaProduto    );
    $stmt->bindValue(':nome'     , $nomeProduto     );
    $stmt->bindValue(':rhlh'     , $rhlhProduto     );
    $stmt->bindValue(':arco'     , $arcoProduto     );
    $stmt->bindValue(':libragem' , $libragemProduto );
    $stmt->bindValue(':preco'    , $precoProduto    );
    $stmt->execute();
}

header("Refresh: 0; TelaCadastroProduto.php");
 

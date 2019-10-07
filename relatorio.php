<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');


include_once("Dados.php");

$lista = Dados::listar();

$caminho = 'http://localhost/PHP/PhpstormProjects/untitled2/ProjetoAtualizado_teste_banco/img/';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="css/tabela.css">
    <style>
        .imagem{width: 100px; height: 100px; }
    </style>
</head>

<body>

<header>
    <h2>Relatório</h2>
</header>

<div class="container mb-5 mt-3">
    <table class="table table-striped table-bordered mydatatable" style="width: 100%">

        <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Imagem</th>
                <th>Marca</th>
                <th>Nome</th>
                <th>RH/LH</th>
                <th>Tipo</th>
                <th>Libragem</th>
                <th>Preço</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($lista as $linha):
            $img = $caminho.$linha['imagem'];?>
            <tr>
                <td> <?php echo $linha['id'       ]; ?> </td>
                <td> <?php echo $linha['SKU'      ]; ?> </td>
                <td> <?php echo "<img class='imagem'  src='$img'>" ;?> </td>
                <td> <?php echo $linha['marca'    ]; ?> </td>
                <td> <?php echo $linha['nome'     ]; ?> </td>
                <td> <?php echo $linha['RhLh'     ]; ?> </td>
                <td> <?php echo $linha['tipo'     ]; ?> </td>
                <td> <?php echo $linha['libragem' ]; ?> </td>
                <td> <?php echo $linha['preco'    ]; ?> </td>
            </tr>
        <?php endforeach ?>
        </tbody>

        <tfoot>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Imagem</th>
                <th>Marca</th>
                <th>Nome</th>
                <th>RH/LH</th>
                <th>Tipo</th>
                <th>Libragem</th>
                <th>Preço</th>
            </tr>
        </tfoot>

    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script src="js/tabela.js"></script>
</body>

</html>
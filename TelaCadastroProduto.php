<?php ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produtos</title>
    <link rel="stylesheet" href="css/TelaCadastroProduto.css">
</head>

<body>

    <header>
        <h1>CADASTRO DE PRODUTOS</h1>
    </header>

    <section>
        <form action="gravar.php" method="POST" id="Form_CadastroProduto">
            <!-- <div>
               ID:     <input type="hidden" name="id" class="Itens"  id="ID"     placeholder="ID"    >
                <span  class="mensagemErro erroID"></span>
            </div> -->

            <div>
                SKU:    <input type="number" name="sku" class="Itens"  id="SKU"    placeholder="SKU"   >
                <span  class="mensagemErro erroSKU"></span>
            </div>

            <div>
                Imagem: <input type="file"  name="imagem" class="Itens"  id="imagem"                     >
                <span  class="mensagemErro erroImagem"></span>
            </div>

            <div>
                Marca:  <input type="text"  name="marca" class="Itens"  id="marca"  placeholder="Marca" >
                <span  class="mensagemErro erroMarca"></span>
            </div>

            <div>
                Nome:   <input type="text"  name="nome" class="Itens"  id="nome"   placeholder="Nome"  >
                <span  class="mensagemErro erroNome"></span>
            </div>

                RH/LH:
                <select class="comboBox"    name="rhlh" id="rhlh">
                    <option value="RH">RH</option>
                    <option value="LH">LH</option>
                </select>

                Arco:
                <select class="comboBox"    name="arco" id="arco">
                    <option value="RECURVO">Recurvo</option>
                    <option value="COMPOSTO">Composto</option>
                </select>

            <div>
                Libragem: <input type="number" name="libragem" class="Itens" id="libragem"  placeholder="Libragem">
                <span  class="mensagemErro erroLibragem"></span>
            </div>

            <div>
                Preço:    <input type="number" name="preco" class="Itens" id="preco" placeholder="Preço">
                <span  class="mensagemErro erroPreco"></span>
            </div>

            <div class="botao">
                <input type='submit' value='Cadastrar' onclick="cadastrar()">
                <input type="button" value="Relatório" onclick="redirecionar()">
            </div>

        </form>
    </section>

    <script src="js/TelaCadastroProduto.js"></script>

</body>

</html>
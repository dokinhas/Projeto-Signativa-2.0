<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" href="css/TelaCadastroUsuario.css">
</head>

<body>
    
    <header>
        <h1>CRIAR UMA CONTA</h1>
    </header>

    <section>
            <nav class="nav_abas">
                <ul>
                    <li>
                        <input type="radio" name="tabs" class="abas" id="aba1" checked>
                        <label for="aba1">Pessoa Física</label>                     
                        <div class="conteudo">
                        <form action="gravarUsuario.php" method="POST" id="Form_CadastroUsuario">
                            <article>
                                
                                <div>
                                    Nome: <input type="text" name="nomeCpf" class="Itens"  id="nome" placeholder="Nome" onkeypress="validarTecla()" required autocomplete="off" >
                                    <span  class="mensagemErro erroNome"></span>
                                </div>

                                <div>
                                    Sobrenome: <input type="text" name="sobrenomeCpf" class="Itens"  id="sobrenome"   placeholder="Sobrenome" onkeypress="validarTecla()" autocomplete="off" >
                                    <span  class="mensagemErro erroSobrenome"></span>
                                </div>
                            
                                <div>
                                    CPF: <input type="text" name="cpf" class="Itens"  id="cpf" placeholder="Ex.: xxx.xxx.xxx-xx"  oninput="mascara(this, 'cpf')" autocomplete="off" name="customer['cpf']" >
                                    <span  class="mensagemErro erroCPF"></span>
                                </div>
                                
                                <div>
                                    E-mail: <input type="email" name="emailCpf" class="Itens"  id="email" placeholder="E-mail">
                                    <span  class="mensagemErro erroEmail"></span>
                                </div>
                                
                                <div>
                                    Data de Nascimento:  <input type="date" name="dataCpf" class="Itens"  id="data">
                                    <span  class="mensagemErro erroData"></span>
                                </div>
                                
                                <div>
                                    Usuario: <input type="text" name="usuarioCpf" class="Itens"  id="usuario" placeholder="Usuario">
                                    <span  class="mensagemErro erroUsuario"></span>
                                </div>
                                
                                <div>
                                    Senha: <input type="password" name="senhaCpf" class="Itens"  id="senha" placeholder="Senha">
                                    <span  class="mensagemErro erroSenha"></span>
                                </div>

                                <div class="botao">
                                    <input type="submit" value="Cadastrar" onclick="gravarCpf()">
                                    <!-- <input type="submit" value="Cadastrar" onclick="cadastrarCpf()"> -->
                                </div>
                                
                            </article>
                        </form>
                    </div>
                </li>

                <li>
                    <input type="radio" name="tabs" class="abas" id="aba2">
                    <label for="aba2">Pessoa Jurídica</label>
                    <div class="conteudo">
                        <form action="gravarUsuarioCnpj.php" method="POST" id="Form_CadastroUsuarioCnpj">
                            <article>
                           
                                <div>
                                    CNPJ: <input type="text" name="cnpj"      class="Itens"  id="cnpj"        placeholder="Ex.: xx.xxx.xxx/xxxx-xx" oninput="mascara(this, 'cnpj')" autocomplete="off" name="customer['cnpj']">
                                    <span  class="mensagemErro erroCNPJ"></span>
                                </div>

                                <div>
                                    Razão Social: <input type="text" name="razaoCnpj" class="Itens"  id="razao"       placeholder="Razão Social"        >
                                    <span  class="mensagemErro erroRazao"></span>
                                </div>

                                <div>
                                    Inscrição Estadual: <input type="number" name="inscricaoCnpj" class="Itens"  id="inscricao"   placeholder="Inscrição Estadual"  >
                                    <span  class="mensagemErro erroInscricao"></span>
                                </div>

                                <div>
                                    E-mail: <input type="email" name="emailCnpj" class="Itens"  id="email2"      placeholder="E-mail"              >
                                    <span  class="mensagemErro erroEmail2"></span>
                                </div>

                                <!-- <div>
                                    Data: <input type="hidden" name="dataCnpj" class="Itens"  id="data2"                                         >
                                    <span  class="mensagemErro erroData2"></span>
                                </div> -->

                                <div>
                                    Usuario: <input type="text" name="usuarioCnpj" class="Itens"  id="usuario2"    placeholder="Usuario"             >
                                    <span  class="mensagemErro erroUsuario2"></span>
                                </div>

                                <div>
                                    Senha: <input type="password" name="senhaCnpj"  class="Itens"  id="senha2"      placeholder="Senha"               >
                                    <span  class="mensagemErro erroSenha2"></span>
                                </div>
                                    
                                <div class="botao">
                                    <input type="submit" value="Cadastrar" onclick="gravarCnpj()">
                                    <!-- <input type="submit" value="Cadastrar" onclick="cadastrarCnpj()"> -->
                                </div>
                            </article>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </section>

    <script src="js/TelaCadastroUsuario.js"></script>

</body>

</html>
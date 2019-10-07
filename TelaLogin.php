<?php 

require_once("login.php");


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/TelaLogin.css">
</head>

<body>
    <section class="login">
        <div class="box_interno">
            <div class="titulo_login">Login</div>
        
            <form action="login.php" method="POST" id="Form_Login">
                <div class="usuario_senha"> 
                    Usuario: <input type="text" name="login" id="usuario" placeholder="Username ou E-mail">
                    <span  class="mensagemErro erroUsuario"></span>
                </div>
                
                <div class="usuario_senha"> 
                    Senha: <input type="password" name="senha" id="senha" placeholder="Senha">
                    <span  class="mensagemErro erroSenha"></span>
                </div>

                <div class="botoes">
                    <div id="botao_entrar">
                        <input type="button" value="Login" onclick="logar()">
                    </div>
                    
                    <div id="botao_cadastrar">
                        <input type="button" value="Criar uma nova conta" onclick="redirecionar()">
                    </div>
                </div>   

                <a href="#" id="Esenha">Esqueceu sua senha?</a>

            </form>
        </div>
    </section>
    <script src="js/TelaLogin.js"></script>
</body>

</html>
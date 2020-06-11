<?  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Login
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./ArquivosCSS/style.css">
    </head>

    <body>
        </div>
        <div id="principal" >
            <form method= "POST" action="recuperar_dados.php">
                <div>
                    <input type="email" name="email" id="nome" class="nome" placeholder="Email">
                </div>

                <div>
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                </div>

                <div>
                    <input type="submit" id="enviar" class="enviar" value="Login">
                </div>
                <div>
                <?php
                if(isset($_SESSION['msgErro'])){
                    echo $_SESSION['msgErro'];
                    unset($_SESSION['msgErro']);
                } else {
                } ?>
                </div>
                <div><br>
                    <a href="./recuperacao_de_senha.php">Esqueceu a senha?</a><br><br>
                    Não possui uma conta? <a href="./cadastro.php">Cadastre-se</a><br><br>
                    <a href="../Home/index.php">Voltar para o inicio</a>
                </div>    
            </form>
        </div>
    </body>
</html>
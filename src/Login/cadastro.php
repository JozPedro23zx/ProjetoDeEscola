<?  session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> 
            Cadastro
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./ArquivosCSS/styleCadastro.css">
    </head>
    <body>
        <div id="principal">
            <form method="POST" action="manipular_dados.php">
            <?php
            if(isset ($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
                <div >
                    <input type="text" name="nome" id="nome" class="nome" placeholder="Nome" require>
                </div>

                <div>
                    <input type="email" name="email" id="email" class="email" placeholder="Email" require>
                </div>

                <div>
                    <input type="password" name="senha" id="senha" placeholder="Senha" require>
                </div>

                <div>
                    <input type="password" name="senhaConfirm" id="senhaConfirm" placeholder="Confirme sua senha" require>
                </div>

                <div>
                    <input type="submit" id="enviar" class="enviar" value="Cadastrar" require>
                </div>  
            </form>
            <div style = "padding-bottom: 13px">
                Já possui uma conta? <a href="./index.php">Faça o Login</a>
            </div>
        </div>
    </body>
</html>
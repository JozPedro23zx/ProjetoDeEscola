<!DOCTYPE html>
<html>
    <head>
        <title>
            Recuperar Senha
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./ArquivosCSS/style.css">
    </head>

    <body>
        <div id="principal_recupera" >
           <h1 style="text-align: left;">Recuperar senha</h1>
           
           <p style="text-align: left;">Para recuperar sua senha, digite seu e-mail abaixo:</p>
           <div id="inputGroup">         
               <input id="email"  type="email" name="email" placeholder="E-mail" required><br>
               <input onclick="validate()" class="enviar" style="width: 30%;" class="recupera_senha" type="submit" value="Enviar">
            </div>
            <!--Isso é apenas uma demonstração, o email não foi enviado de verdade-->
            <p style="display: none; color: green;" id="message"> O email foi enviado com sucesso! </p> 
        </div>
    </body>
</html>

<script>
   function validate() {
      let message = document.getElementById("message");
      let inputGroup = document.getElementById("inputGroup");
      inputGroup.setAttribute("style","display:none;");
      message.style.display = "block";
   }
</script>
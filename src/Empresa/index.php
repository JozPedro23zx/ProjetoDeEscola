<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="./style.css">
    
    <title>Fiat - Empresa</title>
  </head>
  <body>
    
    
    <div id="container">
      <div id="topo">
      <?php
        include("../Componentes/cabecalho.php");  
      ?>
      </div>
      <div id="tela-principal">
          <div id="falar">
              <h3>FALE CONOSCO</h3>
              <form>
                  <div>
                      <input type="text" name="nome" class="nome" placeholder="Digite seu nome" require>
                  </div>
                  <div>
                    <input type="email" name="email" class="email" placeholder="Digite seu Email">
                  </div>
                  <div>
                    <input type="number" name="nome" class="nome" placeholder="Telefone/WhatsApp">
                  </div>
                  <div>
                      <input type="checkbox" value="Email">Email
                      <input type="checkbox" value="Telefone">Telefone
                      <input type="checkbox" value="WhatsApp">WhatsApp
                  </div>
                  <div>
                      <textarea placeholder="Digite Sua Mensagem" style="width: 90%;" require></textarea>
                  </div>
                  <div>
                      <input type="submit" class="enviar" value="Envie Sua Pergunta">
                  </div>
              </form>
          </div>
        <div id="info">

                <!-- ATENÇÃO: Pode-se notar há algumas frases que parecem um pouco... cômicas. 
                Nós apenas usamos do humor para trazer um pouco de alegria neste trabalho
                que chega a ser cansativo. Enfim, caso o conteúdo pareça ofensivo, ou 
                simplismente queria que ele seja mais sério, entre em contato conosco para que 
                possamos mudá-lo -->
                <h1 class="sobre">Quem Somos Nós?</h1><!--Conteúdo 1-->
                <p>
                  Se você sonha em ter seu carro, mas não tem dinheiro nem para comprar um carrinho
                  da Hot-Wells, nossa empresa disponibiliza os melhores carros, com um preço que não machuca o seu
                  bolso. 
                </p>
                <p> 
                  Uma das melhores empresas de concessionára do mundo, com carros elegantes, baratos e velozes.
                  Carros perfeitos para conquistar a atenção de certos olhares femininos, para economizar 
                  dinheiro e para chegar mais cedo no seu trabalho horrível e infeliz.
                </p>
                <p> 
                  E nossos funcionários? Ora, eles são muito bem escravisad... quer dizer pagos! Além de terem
                  um bom ambiente de trabalho, apesar de reclamarem o tempo todo. Eles também têm uma ótima
                  qualidade de vida, apesar da maioria sofrer de distúrbios psicológicos.
                </p>
                <h1 class="sobre">Onde estamos</h1><!--Conteúdo 2-->
                <p >
                  Nossa empresa está localizada no mundo inteiro, mas você pode visitá-la em qualquer país, e se 
                  você mora no Brasil... sinto muito. Mas não se preocupe, você ainda irá sair com seu carro
                  novinho... e provalvelmente será roubado logo depois. 
                </p>
                <p>
                  Caso queria saber onde encontrar uma consessionária em seu município, entre em contato conosco.
                </p>
                <h1 class="sobre">O que fazemos?</h1><!--Conteúdo 3-->
                <p>
                  Vendemos Carros... é só isso.
                </p>
                <h1 class="sobre">Contato</h1><!--Conteúdo 4-->
                <p>              
                  <!--Informações fictícias-->
                  E-máil: concessionáraFake@gamil.com.br<br>
                  Telefone: 88 990666045<br>
                  Twitter: @FiatFake<br>
                  Instagran: concessionára_fiat_fake
                </p>

            <hr style="clear: both;">
        </div>
       </div>
    </div>
  </body>
</html>
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
    
    <title>Fiat - Home</title>
  </head>
  <body>
    
    
    <div id="container">
      <div id="topo">
      <?php
        include("../Componentes/cabecalho.php");  
      ?>
      </div>

      <div id="tela-principal">
        <div id="config-carousel">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="../Imagens/TelaPrincipal.jpg" style="width: 100%; height: 400px;">
              </div>

              <div class="carousel-item">
                <img src="../Imagens/TelaPrincipal1.jpg" style="width: 100%; height: 400px;">
              </div>

              <div class="carousel-item">
                <img src="../Imagens/TelaPrincipal2.jpg" style="width: 100%; height: 400px;">
              </div>

              <div class="carousel-item">
                <img src="../Imagens/TelaPrincipal3.jpg" style="width: 100%; height: 400px;">
              </div>

              <div class="carousel-item">
                <img src="../Imagens/TelaPrincipal4.jpg" style="width: 100%; height: 400px;">
              </div>

            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <div id="compra-carro" class="clearfix">
          <h2>Compre seu veículo:</h2>
          <div class="float-left">
            <img src="../Imagens/MajinBoo.png" style="width: 210px; height: 110px;">
            <h3>Majin Boo</h3>
            <a href="saibamais.html">Saiba mais</a>
          </div>

          <div class="float-left">
            <img src="../Imagens/Picolo.png" style="width: 210px; height: 110px;">
            <h3>Picolo</h3>
            <a href="saibamais.html">Saiba mais</a>
          </div>

          <div class="float-left">
            <img src="../Imagens/Vegeta.png" style="width: 210px; height: 110px;">
            <h3>Vegeta</h3>
            <a href="saibamais.html">Saiba mais</a>
          </div>

          <div class="float-left">
            <img src="../Imagens/Tenchiran.png" style="width: 210px; height: 110px;">
            <h3>Tenchiran</h3>
            <a href="saibamais.html">Saiba mais</a>
          </div>
        </div>
      </div>     
    </div>

    <div id="rodape">
      <h3>Página feita exclusivamente para o trabalho de Laboratório Web</h3>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
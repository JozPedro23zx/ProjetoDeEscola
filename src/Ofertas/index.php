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
    <link rel="stylesheet" type="text/css" href="../Home/style.css">
    <link rel="stylesheet" type="text/css" href="./styleOfertas.css">
    
    <title>Fiat - Ofertas</title>
  </head>
  <body>
    
    
    <div id="container">
      <div id="topo">
      <?php
        include("../Componentes/cabecalho.php");  
      ?>
      </div>
      <div id="conteudo">
        <div id="titulo">
          <h1>OFERTAS</h1>
        </div>

        <div id="CarrosOfertas">
          <div class="oferta">
            <img src="../Imagens/Oferta1.png" style="height: 250px; width: 320px;">
            <p>
              <strong>Shikamaru</strong><br>
              de <strike>R$ 29.500,00</strike><br>
              por<br>
              R$ 25.600,00<br>
              <a href="#"><u>SAIBA MAIS</u></a>
            </p>
          </div>

          <div class="oferta">
            <img src="../Imagens/Oferta2.png" style="height: 250px; width: 320px;">
            <p>
              <strong>Kakashi</strong><br>
              de <strike>R$ 24.350,00</strike><br>
              por<br>
              R$ 19.800,00<br>
              <a href="#"><u>SAIBA MAIS</u></a>
            </p>
          </div>

          <div class="oferta">
            <img src="../Imagens/Oferta3.png" style="height: 250px; width: 320px;">
            <p>
              <strong>Madara</strong><br>
              de <strike>R$ 31.200,00</strike><br>
              por<br>
              R$ 28.110,00<br>
              <a href="#"><u>SAIBA MAIS</u></a>
            </p>
          </div>
        </div>
        <hr style="clear: both;">
      </div>
    </div> 

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
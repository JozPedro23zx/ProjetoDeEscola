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
        <div id="compra-carro" class="clearfix">
            <h2>Nossos servicos disponíveis:</h2>
            <div class="caixa_servicos">
              <h3>Troca de Pneu</h3>
              <img src="../Imagens/Servico 1.jpg">
              <p>Fazer a troca de posição dos pneus dianteiros e traseiros a cada 10 mil quilômetros
                 rodados é uma forma de manter um equilíbrio de utilização e aumentar a vida útil 
                 da peça. Outro fator importante é que esse rodízio garante mais estabilidade em 
                 curvas e frenagens, já que o desgaste é mais uniforme no pneu.</p>
              <a class="btn btn-danger btn-sm  " href="saibamais.html">Agendar serviço</a>
            </div>

            <div class="caixa_servicos">
              <h3>Troca de Óleo</h3>
              <img src="../Imagens/Servico 2.jpg">
              <p>Trocar o óleo com frequência é fundamental para o bom funcionamento de qualquer veículo, 
                 seja ele moto, carro ou caminhão. Um dos principais recursos, O óleo é responsável pela 
                 lubrificação e proteção das partes móveis, reduzindo o atrito e evitando o desgaste das 
                 peças do motor antes do tempo..</p>
              <a class="btn btn-danger btn-sm  " href="saibamais.html">Agendar serviço</a>
            </div>

            <div class="caixa_servicos">
              <h3>Pintura</h3>
              <img src="../Imagens/Servico 3.jpg">
              <p>Nos dias atuais, as pessoas criam vínculos com seus automóveis antes mesmo da compra, 
                 dando importância, muitas vezes, aos acessórios que lhes são atribuídos. Entre os itens
                 que não podem ser deixados de lado está a pintura do carro, que é quase um cartão de 
                 visitas na hora do consumidor fechar um negócio.</p>
              <a class="btn btn-danger btn-sm  " href="saibamais.html">Agendar serviço</a>
            </div>
        </div>
      </div>
    </div>
   </body>
</html>
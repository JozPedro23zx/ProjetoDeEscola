<?php session_start(); ?>
 <img  id="logo" src="../Imagens/Logo.png">
 <ul>
   <li><a class="btn btn-outline-danger btn-lg" href="../Home">HOME</a></li> 
   <li><a class="btn btn-outline-danger btn-lg" href="../Ofertas">OFERTAS</a></li>
   <li><a class="btn btn-outline-danger btn-lg" href="acessorios.php">ACESSÓRIOS</a></li>
   <li><a class="btn btn-outline-danger btn-lg" href="../Empresa">EMPRESAS</a></li>
   <li><a class="btn btn-outline-danger btn-lg" href="servicos.php">SERVIÇO</a></li>
   <li><a class="btn btn-outline-danger btn-lg" href="vendasdiretas.php">VENDAS DIRETAS</a></li>
  <div>
   <?php 
      if(isset ($_SESSION['NomeDoUsuario'])){
        require_once('botaoSair.php');
      }
      else{
        require_once('botaoLogin.php');
      }
   ?>
   </div>
 </ul> 

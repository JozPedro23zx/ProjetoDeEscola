<?php 
session_start();

$_SESSION['NomeDoUsuario'] = null;

header("Location: ../Login/index.php");
?>
<?php
session_start();

//Variáveis para conexão
$servidor = "localhost"; 
$usuario = "root";
$senha = "";
$dbname = "db_cadastro";

//Criar conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname) or die("Erro ao connectar ao banco de dados");

$nome = $_POST['nome'];
$email = $_POST['email']; 
$senha = $_POST['senha'];
$senhaConfirmada = $_POST['senhaConfirm'];

if ($senhaConfirmada == $senha)
{
/*$result_usuario = "INSERT INTO tb_usuario (nome, email, senha,) VALUES ('$nome', '$email', '$senha')";*/
$sql = "INSERT INTO tb_usuario VALUES";
$sql .= "('$nome', '$email', '$senha')";

//Fazer a conexão
$query = mysqli_query($conexao, $sql) or die("Erro ao cadastrar");
mysqli_close($conexao);

//Direcionar
require('index.php');

}
else{
    $_SESSION['msg'] = "<p style='font-size: 22px; color: #F5B7B1'><b>As senhas estão erradas, tente novamente.</b></p>";
    require('cadastro.php');
}

?>
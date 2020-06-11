<?php
session_start();

//Variáveis para conexão
$servidor = "localhost"; 
$usuario = "root";
$senha = "";
$dbname = "db_cadastro";

//Criar conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname) or die("Erro ao connectar ao banco de dados");

if($_POST['email'] != null && $_POST['senha'] != null)
{
    $email = $_POST['email']; 
    $senha = $_POST['senha'];
    //$senha = md5($senha);

    //Selecionar dados
    $sql = "SELECT * FROM tb_usuario WHERE email = '$email' && senha = '$senha' LIMIT 1";
    $query = mysqli_query($conexao, $sql) or die("Erro ao cadastrar");
    $resultado = mysqli_fetch_assoc($query);

    $nome = $resultado['nome'];
    $_SESSION['NomeDoUsuario'] = $nome;
    
    if(!empty($resultado)) {
        header("Location: ../Home/index.php");
    } else {
        $_SESSION['msgErro'] = "Os dados estão incorretos";
       require("index.php");
    }
    mysqli_close($conexao);
} 
else{
    $_SESSION['msgErro'] = "Insira todos os dados";
    require("index.php");
}
?>
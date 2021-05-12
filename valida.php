<?php

session_start();
include './conexao/conectMysqli.php';
if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); //escapa os caracteres especiais como aspas prevendo SQL injection
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    //$senha = md5($senha);

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' && senha='$senha' LIMIT 1";
    $result = $conn->query($sql);
    $resultado = $result->fetch_assoc();

    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    } elseif (isset($resultado)) {
        $_SESSION['usuarioNome'] = $resultado['usuario'];
        header("Location: main.php");
    }
}
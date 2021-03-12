<?php

$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "mydbpdo";

try {
    //criando a conexão com PDO
    $conn = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
    // //checar a conexão com PDO se tem erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";    
   
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
   
}

$conn = null;

<?php

$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "myDB";
// criando a conexão
$conn = new mysqli($servidor,$usuario,$senha,$database);

// Checando a conexão
if ($conn->connect_error) {
  die("A conexão falhou: " . $conn->connect_error);
}





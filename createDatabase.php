<?php

include './conexao/conectMysqli.php';
// Criando a conexão
$sql = "CREATE DATABASE myTeste";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();


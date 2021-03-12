<?php
$servidor = "localhost";
$usuario = "root";
$senha = "senac";


// criação da conexão
$conn = mysqli_connect($servidor, $usuario, $senha);

//checando a conexão
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Criando a conexão
$sql = "CREATE DATABASE DB_teste";
if (mysqli_query($conn,$sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
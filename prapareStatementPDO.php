<?php
$servername = "localhost";
$username = "root";
$password = "senac";
$dbname = "myDBPDO";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);

// insert a row
$firstname = ($_GET["nome"]);
$lastname = ($_GET["sobrenome"]);
$email = ($_GET["email"]);
$stmt->execute();

echo 'Novo registro cadastrado';

$conn = null;

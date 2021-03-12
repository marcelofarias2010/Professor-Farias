<?php

include 'conexao/conectMysqli.php';

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = ($_POST["nome"]);
$lastname = ($_POST["sobrenome"]);
$email = ($_POST["email"]);

//$firstname = "Grazi";
//$lastname = "da Silva";
//$email = "grazieli@gmail.com";
$stmt->execute();


echo 'dados cadastrados';
$stmt->close();
$conn->close();



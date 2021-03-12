<?php

include './conexao/conectMysqli.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    $ultimo_id = $conn->insert_id;
    echo "Novo Registro criado com sucesso " . $ultimo_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


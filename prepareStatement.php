<?php

include 'conexao/conectMysqli.php';
$Id = $_POST["Id"];
$Acao = $_POST["Acao"];

// prepare and bind
if ($Acao == "Cadastrar") {
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
    $firstname = ($_POST["nome"]);
    $lastname = ($_POST["sobrenome"]);
    $email = ($_POST["email"]);
    
    $stmt->bind_param("sss", $firstname, $lastname, $email);
    
    $stmt->execute();
    echo 'dados cadastrados';
    $stmt->close();
    $conn->close();
    header("Location:main.php?page=listar");
} else {
    $firstname = ($_POST["nome"]);
    $lastname = ($_POST["sobrenome"]);
    $email = ($_POST["email"]);
    $sql = "UPDATE MyGuests SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$Id";

    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizado com sucesso";
        header("Location:main.php?page=listar");
    } else {
        echo "Erro na atualização: " . $conn->error;
        //header("Location:main.php?page=listar");
    }

    $conn->close();
}


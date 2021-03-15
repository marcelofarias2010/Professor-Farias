<?php

include './conexao/conectMysqli.php';

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id={$_GET['id']}";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: main.php?page=listar");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

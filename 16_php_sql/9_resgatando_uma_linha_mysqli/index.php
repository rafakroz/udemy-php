<?php

/*
RESGATANDO UMA LINHA

• Para os SELECTs que precisamos de apenas um dado retornado,
podemos utlizar o fetch_row;

• Este método pode ser inserido depois de obter o resultado, ou seja,
após o get_result.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

$id = 6;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result(); // Capturando o resultado

$item = $result->fetch_row(); // Gerando o array com apenas uma linha

print_r($item);

$conn->close();
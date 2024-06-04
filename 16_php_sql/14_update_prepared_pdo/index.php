<?php

/*
ATUALIZANDO DADOS COM PDO

• Sequência: prepare => bindParam => execute;

• E então a query persitirá no bando:

    $stmt = $conn->prepare("UPDATE tabela SET a = ?, b = ? WHERE c = ?").

*/

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql: host=$host; dbname=$db", $user, $pass);

//---------------------------------------------------------------

$id = 9;
$nome = "Sofá Velut";
$descricao = "Sofá 2 lugares retrátil/reclinável Velut.";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
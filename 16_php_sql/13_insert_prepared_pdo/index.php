<?php

/*
INSERINDO DADOS COM PDO

• EM PDO vamos utilizar uma abordagem parecida com o mysqli;

• Utilizaremos o método prepare para realizar a query com prepared statements;

• Depois bind_param para estabelecer os valores dos parâmetros;

• Por fim execute fará a execução da query;

• Exemplo:
    $stmt = $conn->prepare("INSERT INTO tabela (a, b) VALUES (?, ?)");

*/

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql: host=$host; dbname=$db", $user, $pass);

//---------------------------------------------------------------

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Fogão 5 Bocas";
$descricao = "Fogão com 5 bocas em inox";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
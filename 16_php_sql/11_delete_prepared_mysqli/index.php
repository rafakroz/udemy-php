<?php

/*
DELETANDO DADOS COM PREPARED

• Na hora de inerir o WHERE para remover os registros, vamos inserir os prepared statements;

• Sequência: prepare => bind_param => execute;

• Lembrando que DELETE sem WHERE, causa remoção de todos os registros.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

$nome = 'Teste';

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

$conn->close();
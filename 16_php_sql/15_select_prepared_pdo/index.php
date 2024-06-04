<?php

/*
SELECIONANDO DADOS COM PDO

• Para selecionar dados a abordagem também é parecida com pysqli;

• Sequência: prepare => bindParam => execute();

• fetch: recebe apenas a primeira ocorrência;

• fetchAll: recebe todos os dados.

*/

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql: host=$host; dbname=$db", $user, $pass);

//---------------------------------------------------------------

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC); // array associativo apenas com nme da coluna e valor

print_r($data);

//$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo "<br><br>";

//print_r($itens);
<?php

/*
SEÇECINANDO DADOS COM mysqli

• A instrução para inserir dados é a SELECT;

• Vamos inserir o método query em uma variável, que é onde receberemos os resultados;

• Com o método fetch_assoc, transformamos os resultados em um array.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

$select = "SELECT * FROM itens";

$resultado = $conn->query($select);

$conn->close(); // fechando a conexão após a query

// 1 resultado
$item = $resultado->fetch_assoc();

// Todos os resultados

$itens = $resultado->fetch_all();

print_r($itens);
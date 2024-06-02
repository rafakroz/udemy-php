<?php

/*
EXECUTANDO UMA QUERY

• Para executar uma query vamos usar o método query;

• Ele deve ser utilizado a partir do objeto que fez a conexão;

• Vamos receber um determindo retorno como resultado, que podem ser os dados,
caso seja um SELECT, pro exemplo;

• É importante ao fim de todas as queries fechar a conexão, com o método close;

• Conexões abertas gastam recursos do servidor e prejudicam a aplicação.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

// Armazenando a query numa variável
$sql = "SELECT * FROM itens";

// Usando o método query com a query da variável $sql na conexão estabelecida [$conn],
// armazanando na variável resultado
$resultado = $conn->query($sql);

// Imprimindo a query
print_r($resultado);

// Fechando a conexão
$conn->close();
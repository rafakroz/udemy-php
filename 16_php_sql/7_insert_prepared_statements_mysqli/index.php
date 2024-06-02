<?php

/*
PREPARED STATEMENTS

• Prepared statements é quando criamos uma query com placeholders em vez dos valores reais;

• Aumentando a segurança e a performance da requisição;

• Neste caso o fluxo muda um pouco. Vamos utlizar o método prepare para preparar a query;

• O bind_param para resgatar os parâmetros, e o execute para rodar a query;

--

• prepare => bind_param =>;

• Ela é comumente chamda de statement; (declaração)

• Como terermos uma variável para guardar estes três passos, também devemos
fechar a conexão desta variável;

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

// variáveis viriam de um POST

$nome = "Cama Box Queen";

$descricao = "Cama Box com dimensões Queen.";

// ? : na query não informaremos os dados

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

// Tipo de dados e as variáveis com os dados:
// s = string
// i = integer
// d = double

$stmt->bind_param("ss", $nome, $descricao);

$stmt->execute();

$conn->close();
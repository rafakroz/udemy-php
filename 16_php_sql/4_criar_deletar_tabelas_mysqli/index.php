<?php

/*
CRIANDO E DELETANDO TABELAS COM mysqli

• Para criar e deletar tabelas vamos utilizar as mesmas queries de
SQL puro porém com o auxílio do método query;

• DROP TABLE para deletar tabelas;

• CREATE TABLE para criar tabelas;

• SEMPRE FECHAR CONEXÃO.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

//Criação de tabela
// $criar = "CREATE TABLE teste (
//             nome VARCHAR(100),
//             sobrenome VARCHAR(100)
//         )";

//Exclusão de tabela

$deletar = "DROP TABLE teste";

// $conn->query($criar);

$conn->query($deletar);

$conn->close();
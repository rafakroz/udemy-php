<?php

/*
INSERINDO DADOS COM mysqli

• Para inserir dados com o mysqli, vamos utilizar a mesma query do SQL puro
e novamente com o método query;

• A instrução para inserir dados é a INSERT INTO;

• Devemos passar a tabela, colunas e valores.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

$table = "itens";
$nome = 'Mesa de Centro';
$descricao = 'Mesa de Centro pequena com vidro';

$insert = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($insert);

$conn->close();
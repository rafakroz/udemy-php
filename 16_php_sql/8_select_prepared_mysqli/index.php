<?php

/*
SELECIONANDO DADOS COM PREPARED

• Para selecionar dados com prepared statements devemos resgatar os dados
com o método fetch_all;

• A sequência será:
    prepare => bind_param => execute => get_reault => fetch_all;

prepare : com a query
bind_param : para trocar os parâmetros no where
execute : executa a query
get_result : pega o resultado obtido pela query
fetch_all : resgata os dados em array

• Fechar conexão.


Obs.: Ao usar um SELECT * não é necessário o "prepared". Já para queries com WHERE, por exemplo
é necessário/interessante.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

$id = 4;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id);

$stmt->execute(); // Executando a query

$result = $stmt->get_result(); // Capturando o resultado query

$data = $result->fetch_all(); // Gerando um array com todos os resultados

print_r($data); // Imprimindo os resultados


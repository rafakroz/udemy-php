<?php

/*
ATUALIZANDO DADOS COM PREPARED

• Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;

• Na hora de inserir o SET para aualizar os campos, vamos inserir os prepared statements;

• Sequeência: prepare => bind_param => execute.

*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//--------------------------------------------

$id = 9;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Sofá";

$descricao = "Sofá na cor cinza, da coleção moderna.";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

// Veriicando se deu erro

if($stmt->error) {

    echo "Erro: " . $stmt->error;

}


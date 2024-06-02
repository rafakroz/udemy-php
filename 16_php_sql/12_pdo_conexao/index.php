<?php

/*
CONEXÃO COM PDO

• A conexão com PDO é um pouco diferente de mysqli, mas vamos
informar basicamente os mesmo parâmetros;

• Que são: banco de dados, host, nome do banco, usuário e senha;

• Exemplo:

    $conn = new PDO("mysql:host=localhost; dbname=teste", $user, $pass);

*/

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql: host=$host; dbname=$db", $user, $pass);

//---------------------------------------------------------------
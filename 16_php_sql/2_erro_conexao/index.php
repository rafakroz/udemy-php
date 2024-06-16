<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

<<<<<<< HEAD
if($conn->connect_errno) {
    echo "Erro na conexão!" . "<br>";
=======

if($conn->connect_errno) {
    echo "Erro na conexão!" . "<br>";
    echo "Erro: " . $conn->connect_error;
>>>>>>> e5a20b45611ee28a739847dba7ffeb0b30ac2763
}
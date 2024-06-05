<?php

    // Iniciando a sessão, pois haverá mensagem por sessão
    session_start();

    // Conexão com o banco
    include_once("connection.php");

    include_once("url.php");

    $query = 'SELECT * FROM contacts';

    $stmt = $conn->prepare($query);

    // Como não tem parâmetros, não precisa de bindParam

    $stmt->execute();

    $contacts = [];

    $contacts = $stmt->fetchAll();

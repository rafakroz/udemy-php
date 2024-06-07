<?php

    // Iniciando a sessão, pois haverá mensagem por sessão
    session_start();

    // Conexão com o banco
    include_once("connection.php");

    include_once("url.php");

    // Inicializando a variável vazia
    $id;

    if(!empty($_GET)) {
        $id = $_GET['id'];
    }

    if(!empty($id)) {

        $query = 'SELECT * FROM contacts WHERE id = :id';

        $stmt = $conn->prepare($query);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    } else {

    $contacts = [];

    /**
     * Retorna todos os contatos
     */
    $query = 'SELECT * FROM contacts';

    $stmt = $conn->prepare($query);

    // Como não tem parâmetros, não precisa de bindParam

    $stmt->execute();


    $contacts = $stmt->fetchAll();

}
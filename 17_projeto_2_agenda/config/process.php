<?php

    // Iniciando a sessão, pois haverá mensagem por sessão
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    // Modificação no Banco
    if(!empty($data)) {

        //print_r($data);

        // Criar contrato

        if ($data['type'] === 'create') {

            $name = $data['name'];
            $phone = $data['phone'];
            $observations = $data['observations'];

            $query = 'INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)';

            $stmt = $conn->prepare($query);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':observations', $observations);

            try {

                $stmt->execute();
                $_SESSION['msg'] = "Contato criado com sucesso";

            } catch (PDOException $e) {

                // Erro na conexão
                $error = $e->getMessage();
                echo 'Erro: ' . $error;
            }
        }

        // Redirect home
        header('Location:' . $BASE_URL . "../index.php");


    //Seleção de dados
    } else {

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

    }

    // Fechar conexão

    $conn = null;
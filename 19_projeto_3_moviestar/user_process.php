<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDao($conn, $BASE_URL);

    // Resgata o tipo de formulário
    $type = filter_input(INPUT_POST, "type");

    // Verificação do tipo de formulário
    if ($type === 'update') {

        // Resgata dados do usuário
        $userData = $userDao->verifyToken();

        // Receber dados do post
        $name = filter_input(INPUT_POST,'name');
        $lastname = filter_input(INPUT_POST,'lastname');
        $email = filter_input(INPUT_POST,'email');
        $bio = filter_input(INPUT_POST,'bio');

        // Criar um novo objeto do usuário
        $user = new User();

        // Preencher dados di usuário
        $userData->name = $name;
        $userData->lastname = $lastname;
        $userData->email = $email;
        $userData->bio = $bio;

        $userDao->update($userData);
            
    // Atualizar senha do usuário
    } else if ($type === 'changepassword') {


    // Caso um usuário esteja tentando passar dados maliciosos, não mapeados, um type inválido
    } else {

        $message->setMessage('Informações inválidas!', 'error', 'index.php');

    }
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
if ($type === 'register') {

    $name = filter_input(INPUT_POST,'name');
    $lastname = filter_input(INPUT_POST,'lastname');
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    $confirmpassaword = filter_input(INPUT_POST,'confirmpassword');

    // Verificação de dados mínimos
    if($name && $lastname && $email && $password) {

        // Verificar se as senhas estão iguais
        if ($password === $confirmpassaword) {

            // Verificar se o E-mail já está cadastrado no sistema
            if ($userDao->findByEmail($email) === false) {

                echo "Nenhum usuário foi encontrado!";

            } else {

                // Exibe o erro, usuário já cadastrado
                $message->setMessage("Usuário já cadastrado, tente outro e-mail.", "error", "back");

            }

        } else {

            // Exibe o erro, de senhas diferentes e volta para a tela de login
            $message->setMessage("As senhas não são iguais.", "error", "back");

        }

    } else {

        // Exibe o erro manda de volta para a tela de login
        $message->setMessage("Por favor, preencha todos os campos.", "error", "back");

    }


} elseif ($type === 'login') {

}
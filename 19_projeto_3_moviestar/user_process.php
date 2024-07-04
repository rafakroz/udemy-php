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

        // Upload da imagem
        if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {

            // Trabalhando com apenas com um array
            $image = $_FILES['image'];
            $imageTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            $jpgArray = ['image/jpeg', 'image/jpg'];

            // Checagem do tipo de imagem.
            // Para ter certeza que estamos fazendo upload de imagem 
            if (in_array($image['type'], $imageTypes)){

                // Checar se é jpg
                if (in_array($image['type'], $jpgArray)){

                    $imageFile = imagecreatefromjpeg($image['tmp_name']);
                    
                // É png
                } else {
                    
                    $imageFile = imagecreatefrompng($image['tmp_name']);

                }

                // Geração de noma da imagem
                $imageName = $user->imageGenerateName();

                // Criar a imagem jpg
                imagejpeg($imageFile, './img/users/' . $imageName,100);

                // salvando no banco o caminho da imagem, para poder acessar no edit
                $userData->image = $imageName;            

            } else {

                $message->setMessage('Tipo inválido de imagem, insira jpg ou png!', 'error', 'back');
            
            }

        }

        $userDao->update($userData);
            
    // Atualizar senha do usuário
    } else if ($type === 'changepassword') {


    // Caso um usuário esteja tentando passar dados maliciosos, não mapeados, um type inválido
    } else {

        $message->setMessage('Informações inválidas!', 'error', 'index.php');

    }
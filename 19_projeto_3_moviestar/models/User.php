<?php
class User {

    // Todos os campos do banco de dados
    // Os models que mandam no DAO [Controladores]

    public $id;
    public $name;
    public $lastname;
    public $email;
    public $password;
    public $image;
    public $bio;
    public $token;

    //
    public function generateToken() {

        return bin2hex(random_bytes(50));

    }

    //
    public function generatePassword($password) {

        return password_hash($password, PASSWORD_DEFAULT);

    }

}

// Métodos que o DAO poderá usar

interface UserDAOInterface {

    // Vai construir o objeto
    public function buildUser($data);

    // Cria o usuário e permitirá fazer o login
    public function create(User $user, $authUser = false);

    // Atualizar usuário no sistema
    public function update(User $user);

    // Verifica o token [False, fica sem proteção, sem rota protegida]
    public function verifyToken($protected = false);

    // Efetuando o login e redirecionando para uma página específica
    public function setTokenToSession($token, $redirect = true);

    // E-mail e password, junto com o Token, farão a autenticação completa
    public function authenticateUser($email, $password);

    // Encontrar o usuário pelo Email
    public function findByEmail($email);

    // Encontrar o usuário pelo Id
    public function findById($id);

    // Destruindo o Token
    public function destroyToken();

    // Recebe o token
    public function findByToken($token);

    // Alterar senha
    public function changePassword(User $user);

}
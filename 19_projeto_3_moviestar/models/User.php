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

    public function getFullName($user)
    {
        return $user->name . ' ' . $user->lastname;
    }

    // Função para geração do token
    public function generateToken()
    {
        return bin2hex(random_bytes(50));
    }

    // Função para geração da hash do password
    public function generatePassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    // gera caracteres, que serão inseridos no nome, evitando que a imagem seja substituída,
    // pois terão nomes diferentes
    public function imageGenerateName()
    {
        return bin2hex(random_bytes(60)) . '.jpg';
    }

}

// Métodos que o DAO poderá usar
interface UserDAOInterface {

    public function buildUser($data); // Construir o objeto
    public function create(User $user, $authUser = false); // Cria o usuário e permitirá fazer o login
    public function update(User $user, $redirect = true); // Atualizar usuário
    public function verifyToken($protected = false); // Verifica o token [Sem proteção, sem rota protegida]
    public function setTokenToSession($token, $redirect = true); // Efetuando o login e redireciona usuário
    public function authenticateUser($email, $password); // Autenticação com E-mail, password e Token
    public function findByEmail($email); // Encontrar o usuário pelo Email
    public function findById($id); // Encontrar o usuário pelo Id
    public function destroyToken(); // Destrói o Token
    public function findByToken($token); // Recebe o token
    public function changePassword(User $user); // Alterar senha

}
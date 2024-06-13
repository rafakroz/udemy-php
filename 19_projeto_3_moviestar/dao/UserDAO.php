<?php

    require_once("models/User.php");

class UserDAO implements UserDAOInterface {

    private $conn;
    private $url;

    public function __construct(PDO $conn, $url) {
        $this->conn = $conn; //chamando a conexão
        $this->url = $url; //chamando a URL do sistema [BASE_URL]
    }

    // Construir o objeto
    public function buildUser($data) {

        $user = new User(); // classe do arquivo User

        $user->id = $data['id'];
        $user->name = $data['name'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->image = $data['image'];
        $user->bio = $data['bio'];
        $user->token = $data['token'];

        // Retorna o objeto a quem chamar
        return $user;

    }

    public function create(User $user, $authUser = false) {

    }

    public function update(User $user) {

    }

    public function verifyToken($protected = false) {

    }

    public function setTokenToSession($token, $redirect = true) {

    }
    public function authenticateUser($email, $password) {

    }

    public function findByEmail($email) {

        // Primeiro verifica se algum email foi passado
        if ($email != '') {

            $stmt = $this->conn->prepare('SELECT * FROM users
                                          WHERE email = :email');

            $stmt->bindParam(':email', $email);

            $stmt->execute();

            // Um das formas para saber que achou o usuário cadastrado
            if($stmt->rowCount() > 0) {

                // fetch, pois se trata de apenas um usuário
                $data = $stmt->fetch();
                // Retorna o objeto montado, com todos os dados
                $user = $this->buildUser($data);

                // retornou o usuário localizado
                return $user;

            } else {

                // Não retornou nenhum usuário
                return false;

            }

        } else {
            return false;
        }

    }

    public function findById($id) {

    }

    public function findByToken($token) {

    }

    public function changePassword(User $user) {

    }

}
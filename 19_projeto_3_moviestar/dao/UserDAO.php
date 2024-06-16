
<?php

    require_once("models/User.php");
    require_once("models/Message.php");

class UserDAO implements UserDAOInterface {

    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url) {
        $this->conn = $conn; //chamando a conexão
        $this->url = $url; //chamando a URL do sistema [BASE_URL]
        $this->message = new Message($url);
    }

    // Construir o objeto
    public function buildUser($data) {

        $user = new User(); // classe do arquivo User

        $user->id = $data["id"];
        $user->name = $data["name"];
        $user->lastname = $data["lastname"];
        $user->email = $data["email"];
        $user->password = $data["password"];
        $user->image = $data["image"];
        $user->bio = $data["bio"];
        $user->token = $data["token"];

        // Retorna o objeto a quem chamar
        return $user;
    }

    // Função para criação de novo usuário
    public function create(User $user, $authUser = false){

        $stmt = $this->conn->prepare('INSERT INTO users(name, lastname, email, password, token)
                                      VALUES (:name, :lastname, :email, :password, :token)');

        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":lastname", $user->lastname);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":password", $user->password);
        $stmt->bindParam(":token", $user->token);

        $stmt->execute();

        // Autenticar o usuário, caso auth seja true
        if($authUser) {
            $this->setTokenToSession($user->token);
        }
    }

    //
    public function update(User $user) {

    }

    // Função que verifica o token do usuário e redireciona a página
    public function verifyToken($protected = false) {

        if(!empty($_SESSION["token"])) {

            // Pega o token da session
            $token = $_SESSION["token"];

            $user = $this->findByToken($token);

            if($user) {
                return $user;
            } else if($protected) {

                // Redireciona usuário não autenticado
                $this->message->setMessage("Faça a autenticação para acessar esta página!", "error", "index.php");

            }

        } else if($protected) {

            // Redireciona usuário não autenticado
            $this->message->setMessage("Faça a autenticação para acessar esta página!", "error", "index.php");

        }

    }

    public function setTokenToSession($token, $redirect = true) {

        // Salvar token na session
        // O session token será igual ao token recebido do método
        $_SESSION["token"] = $token;

        if($redirect) {

            // Redireciona para o perfil do usuário
            $this->message->setMessage("Seja bem-vindo!", "success", "editprofile.php");

        }


    }

    // Função para autentica o usuário no login
    public function authenticateUser($email, $password) {

        $user = $this->findByEmail($email);

        if ($user) {

            // Verificar se as senhas estão corretas
            if(password_verify($password, $user->password)) {

                // Gera um token e insere na session
                $token = $user->generateToken();

                $this->setTokenToSession($token);

                // Como o token está sendo gerado, é preiso atualizar token no usuário
                $user->token = $token;

                $this->update($user);

                return true;

            } else {

                return false;

            }

        } else {

            return false;

        }

    }

    //
    public function findByEmail($email) {

        // Primeiro verifica se algum email foi passado
        if ($email != "") {

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

            $stmt->bindParam(":email", $email);

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

    //
    public function findById($id) {

    }

    //
    public function findByToken($token) {

        // Primeiro verifica se algum email foi passado
        if($token != "") {

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token");

            $stmt->bindParam(":token", $token);

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

    // Função que destrói o token ao fazer logout
    public function destroyToken() {

        // Remove o token da session
        $_SESSION["token"] = "";

        // Redirecionar e apresentar a mensagem de sucesso
        $this->message->setMessage("Você fez o logout com sucesso!", "success", "index.php");

    }

    //
    public function changePassword(User $user) {

    }

}
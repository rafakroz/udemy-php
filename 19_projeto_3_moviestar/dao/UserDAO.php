
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

/*



*/

    public function create(User $user, $authUser = false) {

        $stmt = $this->conn->prepare('INSERT INTO users (name, lastname, email, password, token)
                                      VALUES (:name, :lastname, :email, :password, :token)');

        $stmt->bindParam(':name', $user->name);
        $stmt->bindParam(':lastname', $user->lastname);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':password', $user->password);
        $stmt->bindParam(':token', $user->token);

        $stmt->execute();

        // Autenticar o usuário, caso auth seja true
        if ($authUser) {
            // O token do user irá para a session
            $this->setTokenToSession($user->token);
        }
    }

    public function update(User $user) {

    }

    public function verifyToken($protected = false) {

            // Verificação se a sessão está com o token vazio
    if (!empty($_SESSION['token'])){

        // Pega o token da session
        $token = $_SESSION['token'];

        $user = $this->findByToken($token);

            if ($user) {

                return $user;

            } else {

                // Redireciona usuário não autenticado
                $this->message->setMessage('Faça a autenticação para acessar esta página!', 'error', 'index.php');

            }

        } else {

            return false;

        }

    }

    public function setTokenToSession($token, $redirect = true) {

        // Salvar token na session
        // O session token será igual ao token recebido do método
        $_SESSION["token"] = $token;

        if ($redirect) {

            // Redireciona para o perfil do usuário
            $this->message->setMessage('Seja bem-vindo!', 'success', 'editprofile.php');

        }


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

        // Primeiro verifica se algum email foi passado
        if ($token != '') {

            $stmt = $this->conn->prepare('SELECT * FROM users
                                            WHERE token = :token');

            $stmt->bindParam(':token', $token);

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

    public function changePassword(User $user) {

    }

}


//----------------------------------------------------------------------------------
//----------------------------------------------------------------------------------
//----------------------------------------------------------------------------------

/*

  public function create(User $user, $authUser = false) {

    $stmt = $this->conn->prepare("INSERT INTO users(
        name, lastname, email, password, token
      ) VALUES (
        :name, :lastname, :email, :password, :token
      )");

    $stmt->bindParam(":name", $user->name);
    $stmt->bindParam(":lastname", $user->lastname);
    $stmt->bindParam(":email", $user->email);
    $stmt->bindParam(":password", $user->password);
    $stmt->bindParam(":token", $user->token);

    $stmt->execute();

    // Autenticar usuário, caso auth seja true
    if($authUser) {
      $this->setTokenToSession($user->token);
    }

  }

  public function update(User $user, $redirect = true) {

    $stmt = $this->conn->prepare("UPDATE users SET
      name = :name,
      lastname = :lastname,
      email = :email,
      image = :image,
      bio = :bio,
      token = :token
      WHERE id = :id
    ");

    $stmt->bindParam(":name", $user->name);
    $stmt->bindParam(":lastname", $user->lastname);
    $stmt->bindParam(":email", $user->email);
    $stmt->bindParam(":image", $user->image);
    $stmt->bindParam(":bio", $user->bio);
    $stmt->bindParam(":token", $user->token);
    $stmt->bindParam(":id", $user->id);

    $stmt->execute();

    if($redirect) {

      // Redireciona para o perfil do usuario
      $this->message->setMessage("Dados atualizados com sucesso!", "success", "editprofile.php");

    }

  }

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
    $_SESSION["token"] = $token;

    if($redirect) {

      // Redireciona para o perfil do usuario
      $this->message->setMessage("Seja bem-vindo!", "success", "editprofile.php");

    }

  }

  public function authenticateUser($email, $password) {

    $user = $this->findByEmail($email);

    if($user) {

      // Checar se as senhas batem
      if(password_verify($password, $user->password)) {

        // Gerar um token e inserir na session
        $token = $user->generateToken();

        $this->setTokenToSession($token, false);

        // Atualizar token no usuário
        $user->token = $token;

        $this->update($user, false);

        return true;

      } else {
        return false;
      }

    } else {

      return false;

    }

  }

  public function findByEmail($email) {

    if($email != "") {

      $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");

      $stmt->bindParam(":email", $email);

      $stmt->execute();

      if($stmt->rowCount() > 0) {

        $data = $stmt->fetch();
        $user = $this->buildUser($data);

        return $user;

      } else {
        return false;
      }

    } else {
      return false;
    }

  }

  public function findById($id) {

    if($id != "") {

      $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      if($stmt->rowCount() > 0) {

        $data = $stmt->fetch();
        $user = $this->buildUser($data);

        return $user;

      } else {
        return false;
      }

    } else {
      return false;
    }
  }

  public function findByToken($token) {

    if($token != "") {

      $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token");

      $stmt->bindParam(":token", $token);

      $stmt->execute();

      if($stmt->rowCount() > 0) {

        $data = $stmt->fetch();
        $user = $this->buildUser($data);

        return $user;

      } else {
        return false;
      }

    } else {
      return false;
    }

  }
*/
<?php

/*

• Para conectar ao MySQL com o mysqli utilizamos a função mysqli_connect;

• Passamos os parâmetros de: host, usuario, senha e banco de dados;

• Com a conexão feita podemos utilizar as queries;

• Exemplo:

	$conn = new mysqli("host", "user", "pass", "db");

*/

// mysqli

// if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//     echo 'We don\'t have mysqli!!!';
// } else {
//     echo 'Phew we have it!';
// }

// $conn = new mysqli('locahost', 'root', '', 'cursophp');

// PDO

// $host = "localhost";
// $db = "cursophp";
// $user = "postgres";
// $pass = "";

// $conn = new PDO("pgadmin:host=$host;dbname=$db", $user, $pass);

// echo $_SERVER['HTTP_HOST'] . "<br><br>";

// echo $_SERVER['SERVER_NAME'] . "<br><br>";


class Connection
{
  private $server = "localhost";  // Servidor do banco de dados (normalmente "localhost" para servidores locais)
  private $username = "root";     // Nome de usuário do banco de dados
  private $password = "";         // Senha do banco de dados
  private $db = "cursophp";   // Nome do banco de dados que estamos usando

  public function connect()
  {
      // Criar uma conexão com o banco de dados usando MySQLi
      $connection = mysqli_connect($this->server, $this->username, $this->password, $this->db);

      // Verificar se a conexão foi bem-sucedida
      if (mysqli_connect_errno()) {
          die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
      }

      // Configurar o conjunto de caracteres para UTF-8 (opcional, mas recomendado)
      mysqli_set_charset($connection, "utf8");

      // Retornar a conexão para ser usada em outras partes do projeto
      return $connection;
  }
}

//print_r($_SERVER);

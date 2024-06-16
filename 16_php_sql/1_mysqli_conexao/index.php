<?php

/*

• Para conectar ao MySQL com o mysqli utilizamos a função mysqli_connect;

• Passamos os parâmetros de: host, usuario, senha e banco de dados;

• Com a conexão feita podemos utilizar as queries;

• Exemplo:

	$conn = new mysqli("host", "user", "pass", "db");

*/

// mysqli

$conn = new mysqli("locahost", "root", "asd", "curso");
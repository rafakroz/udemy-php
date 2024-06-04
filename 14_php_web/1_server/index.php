<?php

/*
EXPLORANDO $_SERVER

• SERVER_SOFTWARE : Identificação do servidor;

• SERVER_NAME : Hostname, DNS ou IP do servidor;

• SERVER_PROTOCOL : Protocolo do servidor;

• SERVER_PORT : Porta do servidor;

• QUERY_STRING : Argumentos após o ? na URL.

*/

print_r($_SERVER); // Informações do servidor.

echo "<br><br>";

echo $_SERVER['HTTP_HOST'] . "<br><br>";

echo $_SERVER['SERVER_NAME'] . "<br><br>";

if ($_SERVER['SERVER_NAME'] == 'localhost') {

    echo "Está acessando o localhost." . "<br><br>";

}
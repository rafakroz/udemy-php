<?php

/*
DECOMPONDO UMA URL

• Com a função parse_url podemos decompor uma URL;
• Receberemos um array com todas as partes da URL;
• Alguns elementos podem ser retornados: protocolo, host, parâmetros...

*/


$url1 = "https://www.google.com";

$arrayUrl1 = parse_url($url1);

print_r($arrayUrl1);

echo "<br>";

echo $arrayUrl1["host"];

echo "<br>";

// -------------------------------------------------------------

$url2 = "http://www.horadecodar.com.br/?buscar=php";

$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2);

echo "<br>";

// -------------------------------------------------------------

$url3 = "http://www.horadecodar.com.br/usuarios/rafaelqueiroz?id12&nome=Rafael";

$arrayUrl3 = parse_url($url3);

print_r($arrayUrl3);

echo "<br>";
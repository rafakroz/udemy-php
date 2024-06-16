<?php

    $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . ':8090' . dirname($_SERVER['REQUEST_URI'] . "?") . "/";


/*
$BASE_URL = "http://" . : como se forsse uma constante do sistema

$_SERVER['SERVER_NAME'] . ':8090' : vai retornar o locahost

dirname($_SERVER['REQUEST_URI'] .

'?') . '/';

Vai informar onde é a raiz do sistema, para linkar estilos e imagens.

*/

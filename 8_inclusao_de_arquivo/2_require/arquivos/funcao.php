<?php

    $idade = 12;

    echo "A idade é $idade.<br><br>";

    include __DIR__ . "/../pastaexterna.php";

    /*
        __DIR__ .
        Constante, concatenando o diretório principal com a pasta informada.
        Permite acessar pastas anteriores/fora do diretório atual
    */
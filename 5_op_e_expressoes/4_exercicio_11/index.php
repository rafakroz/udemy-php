<?php

    /*
    gettype exibe na tela o tipo do dado
    */    

    $operacao = "5" * 12;

    echo $operacao . "<br>";

    echo "O tipo de dado é: " . gettype($operacao) . "<br><br>";

    echo gettype([]) . "<br>";
    echo gettype(12.2) . "<br>";
    echo gettype("teste") . "<br>";


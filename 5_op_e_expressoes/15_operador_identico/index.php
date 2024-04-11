<?php

    /*
    Operador de igualdade === , validade os tipos de dados. Verifica se os valores e tipos são semelhantes
    */

    //Comparando inteiro com string
    if (5 == "5"){
        echo "O valor 5 inteiro é igual a string 5!";
        echo "<br><br>";
    }
    else{
        echo "O valor 5 inteiro não é igual a string 5!";
        echo "<br><br>";
    }

    //Comparando inteiro com string considerando o tipo de dado
    if (5 === "5"){
        echo "O valor 5 inteiro é igual a string 5!";
        echo "<br><br>";
    }
    else{
        echo "O valor 5 inteiro não é igual a string 5!";
        echo "<br><br>";
    }

    if (5 === "Teste"){
        echo "O valor 5 inteiro é igual a string Teste!";
        echo "<br><br>";
    }
    else{
        echo "O valor 5 inteiro não é igual a string Teste!";
        echo "<br><br>";
    }

    
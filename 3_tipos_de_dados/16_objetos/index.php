<?php

    class Pessoa {
        function falar() {
            echo "Olá pessoal!";
        }
    }

    $rafael = new Pessoa();

    $rafael->nome = "Rafael";

    echo $rafael->nome;

    echo "<br>";
    echo "<br>";

    $rafael->falar();

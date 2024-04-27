<?php

    //FOREACH
    //Utilizado em arrays já prontos

    $nomes = ["Rafael", "Esther", "Solange", "Fred", "Queiroz"];

    foreach ($nomes as $nome) {
        echo "O nome do índice atual é $nome <br>";

        if ($nome == "Fred") {
            echo "O gato mais doido que existe! <br>";
        }
    }

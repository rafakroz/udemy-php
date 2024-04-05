<?php

    function teste(){

        $a = 0; //O valor da variável é resetado a cada chamada da função, permencendo o mesmo.
        $a++;

        echo "$a <br>";

    }

    teste();
    teste();
    teste();

    echo "<br>";

    function testeStatic(){

        static $a = 0;  //O valor da variável é mantido entre chamadas de função e a incrementação ocorre.
        $a++;

        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();


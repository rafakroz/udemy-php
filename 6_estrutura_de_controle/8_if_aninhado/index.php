<?php

    /*
    If aninhado não é muito utilizado, pois, poderíamos utlizar operador lógico no if.
    */

    if (10 > 2) {

        echo "Entrou no if 1! <br>";

        if ("teste" == "teste") {

            echo "Entrou no if interno 1! <br>";

        }
    }
    
    echo "<br>";
    
    if (10 > 2) {

        echo "Entrou no if 2! <br>";

        if ("teste" != 5) {

            echo "Entrou no if interno 2! <br>";
        } else {

            echo "Entrou no else do if 2! <br>";
        }
    }
    
    echo "<br>";
    
    if (10 < 2) {

        echo "Entrou no if 2! <br>";

        if ("teste" != 5) {

            echo "Entrou no if interno 2! <br>";

        } else {

            echo "Entrou no else do if interno 2! <br>";

        }
    }
    else {

        echo "Entrou no else do if 2! <br>";

    }
    echo "<br>";
    
    if (10 < 2) {

        echo "Entrou no if 2! <br>";

        if ("teste" != 5) {

            echo "Entrou no if interno 2! <br>";

        } else {

            echo "Entrou no else do if interno 2! <br>";

        }
    }
    else {

        echo "Entrou no else do if 2! <br>";

    }

    echo "<br>";
    
    if (10 < 2) {

        echo "Entrou no if 3! <br>";

        if ("teste" != 5) {

            echo "Entrou no if interno 3! <br>";

        } else {

            echo "Entrou no else do if interno 3! <br>";

        }
    }
    else {

        echo "Entrou no else do if 3! <br>";

    }
    
    echo "<br>";
    
    $escopo = 10;
    
    if (10 > 2) {

        echo "Entrou no if 4! <br>";

        if ("teste" == "teste") {

            echo "Entrou no if interno 4! <br>";

            echo $escopo;
    }
}
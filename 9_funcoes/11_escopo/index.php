<?php

//Relembrando o escopo

$a = 10;

$b = 15;

function testeEscopo () {

    $a = 5;

    global $b; //utilizando a variável global, dentro da função

    static $c = 0;

    $a++;

    $b++; //alterando B

    $c++;

    echo "Escopo LOCAL de A: $a <br>";
    
    echo "Escopo GLOBAL na função de B: $b <br>";

    echo "Escopo STATIC de C: $c <br>";

}

echo "Escopo GLOBAL de A: $a <br>";
echo "Escopo GLOBAL de B: $b <br>";

testeEscopo();

echo "<br>";

echo "Escopo GLOBAL de B 2: $b <br>";

testeEscopo();
<?php

/*
Percorrendo uma string
• Podemos percorrer cada um dos caracteres de uma string;
• Para isso, vamos utilizar uma estrutura de repetição;
• E o método strlen, para saber o número de caracteres;
• Com isso podemos iterar pela string completa;

for ($i = 0; $i < strlen($str); $i++){

    // codigo

}

*/

$str = "Esta é uma string muito grande, ela tem vários caracteres";

for ($i = 0; $i < strlen($str); $i++){

    echo "$str[$i] <br>"; //imprindo cada letra como se fosse um array

}

//haverá bug com caracteres acentuados
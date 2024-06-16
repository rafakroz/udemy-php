<?php

/*
STRING PARA ARRAY

• Podemos converter uma string em array, com a função explode;
• Passamos primeiro o separador como argumento;
• Depois a string que vai ser convertida.

*/

$frase1 = "Testando o explode";

$fraseArray1 = explode(" ", $frase1);

print_r($fraseArray1);
echo "<br>";

$fraseArray2 = explode(",", $frase1); //como a frase não tem ',', não haverá separação no array

print_r($fraseArray2);
echo "<br>";
echo "<br>";

// ----------------------------------------------------

$frase2 = "Carro, Avião, Barco, Navio";

$frase2Array1 = explode(",", $frase2);

print_r($frase2Array1);
echo "<br><br>";

for ($i = 0; $i < count($frase2Array1); $i++) {

    echo $frase2Array1[$i] . "<br>";

}
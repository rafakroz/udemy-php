<?php

/*
EXERCÍCIO 30 c

• Crie um array de 10 a 20 com FOR;
• Faça um loop em cima do array criado dinamicamente;
• Imprima apenas os números ímpares.
*/

$arr = [];

for ($i = 10; $i <= 20; $i++){

    array_push($arr, $i);

}

print_r($arr);
echo "<br><br>";

for ($i = 0; $i < count($arr); $i++) {

    if ($arr[$i] % 2 != 0) {

        echo "Número ímpar: $arr[$i] <br>";

    }

}
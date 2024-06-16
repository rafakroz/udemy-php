<?php

/*
EXERCÍCIO 45

• Crie um array com a função range de 10 a 45;

• Imprima todos os números com uma soma de 6;

• Se passar de 30 a soma, imprima também que o número é muito alto.

*/

$arr = range(10, 45);

echo "Array de 10 a 45: <br>";

print_r($arr);
echo "<br><br>";

for ($i = 0; $i < count($arr); $i++){

    $soma = $arr[$i] + 6; //somar ao item do array

    if ($soma > 30) { //condição, caso seja maior que 30
        
        echo "O número $soma é muito alto! <br>";
        
    } else {
        
        echo "$soma <br>";

    }

}
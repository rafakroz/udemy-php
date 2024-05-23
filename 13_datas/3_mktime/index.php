<?php

/*
FUNÇÃO MKTIME

• A função mktime recebe em seus parâmetros: hora, minuto, segundo, mês, dia e ano;

• Assim, podemos criar uma data a partir desta informação;

    Exemplo:
            $date = mktime(01, 18, 00, 03, 12, 2025);

            echo date("d/m/y", $date);
*/


$dataNasc = mktime(17,50,00,03,13,1990);

echo $dataNasc . "<br><br>";

$dataNascFormatada = date("d/m/Y", $dataNasc);

echo "Data de Nascimento: " . $dataNascFormatada ."<br><br>";

//---------

$dataFutura = mktime(12, 33, 0 , 10, 2, 2033);

$dataFuturaFormatada = date("d/m/Y", $dataFutura);

echo "Data futura: ". $dataFuturaFormatada ."<br><br>";
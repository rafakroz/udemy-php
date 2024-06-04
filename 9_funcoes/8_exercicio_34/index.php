<?php

/*
EXERCÍCIO 34

• Crie uma função que verifica se um número é par ou ímpar;
• Se for par imprima uma mensagem;
• Se for ímpar imprima uma mensagem.
*/

function parImpar ($number) {

    if ($number % 2 === 0) {

        echo "O número $number é par! <br>";

    } else {

        echo "O número $number é ímpar! <br>";

    }

}

echo parImpar(40);
echo parImpar(33);
echo parImpar(27);
echo parImpar(10);
echo parImpar(85);
echo parImpar(17);
echo parImpar(23);
<?php

// PARÂMETROS DEFAULT

function teste ($a = "teste") {

    echo "O valor de A é: $a <br>";

}

teste();

teste("XXXXX"); // troca o valor default pelo valor passado


function teste2 ($b, $a = "x") { //Por boa prática, colocar os default no final

    echo "O valor de A é: $a e o de B é: $b <br>";

}

teste2("1"); //o segnudo argumento, será o default

teste2(1, 2);

/*
Caso inserida o default primero, na função, eles se tornarão obrigatórios também
*/
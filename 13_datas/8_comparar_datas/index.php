<?php

/*
COMPARAÇÃO DE DATAS

• Datas que foram criadas com o objeto de DateTime podem ser comparadas
utilizando os operadores de compração;

• Operadores como: >, < ou ==;

    Exemplo:
        $dataA > $dataB

*/

$dataA = new DateTime();

$dataB = new DateTime();

$dataC = new DateTime();

$dataB->setDate(2025, 10, 10); // igualando datas
$dataC->setDate(2025, 10, 10);

$dataB->setTime(01, 10, 10); // igualando horas
$dataC->setTime(01, 10, 10);

if($dataB > $dataA) {

    echo "A data B é maior que a data A." . "<br><br>";

} else {

    echo "A data A é maior que a data B." . "<br><br>";

}

if($dataA < $dataB) {

    echo "A data A é menor que a data B." . "<br><br>";

} else {

    echo "A data B é maior que a data A." . "<br><br>";

}

if($dataB == $dataC) {

    echo "A data B é igual a data C." . "<br><br>";

} else {

    echo "A data B é diferente da data C." . "<br><br>";

}
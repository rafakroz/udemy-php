<?php

/*
MÉTODOS SETDATE E SETTIME

• setDate : Recebe ano, mês e dia, alterando completamente a data;

• setTime : Recebe hora, minuto e segundo, alterando o tempo da data.

*/

$data = new DateTime();

print_r($data);

echo "<br><br>";

$data->setDate(2001, 07, 04);

print_r($data);

echo "<br><br>";

// -------

$data->setTime(16, 28, 00);

print_r($data);

echo "<br><br>";

// --------

echo $data->format("d/M/Y") . "<br><br>";

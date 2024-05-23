<?php

/*
MÉTODOS FORMAT E MODIFY

• Os métodos format e modify são da classe DateTime e nos ajudam
a manipular os dados nestes objetos;

• format : formata a data;

• modify : altera a data.

*/

$data = new DateTime();

// format

echo "Format --------------" . "<br><br>";

echo $data->format("d/m/y") ."<br><br>";

echo $data->format("D - M - Y") ."<br><br>";

echo $data->format("l . F . Y") ."<br><br>";

// modify

echo "Modify --------------" . "<br><br>";

$data->modify("+ 5 days");

echo "+ 5 dias: " . $data->format("d/m/Y") ."<br><br>";

$data->modify("+ 2 months");

echo "+ 2 meses: " . $data->format("d/m/Y") ."<br><br>";

$data->modify("- 12 years");

echo "- 12 anos: " . $data->format("d/m/Y") ."<br><br>";
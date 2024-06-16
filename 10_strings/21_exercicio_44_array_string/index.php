<?php

/*
EXERCÍCIO 44

• Converta a seguinte array para uma string:

["O", "PHP", "é", "muito", "legal"]

*/

$arr = ["O", "PHP", "é", "muito", "legal"];

$arrImplode = implode(" ", $arr);

echo $arrImplode . ".";
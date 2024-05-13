<?php

/*
ARRAY PARA STRING

• Com a função implode, podemos converter um array em string;
• Passamos primeiro o separador como argumento;
• Depois a string que vai ser convertida.

*/

$arr1 = ["Maça", "Pera", "Uva", "Limão", "Manga"];

$string1 = implode(", ", $arr1);

echo $string1 . "<br><br>";

//-----------------------------------------------

$arr2 = ["Apple", "Samsung", "Huawei", "Xiaomi", "Sony"];

$string2 = implode(" --- ", $arr2);

echo $string2 . "<br><br>";
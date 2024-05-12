<?php

/*
strlen($string)

Teremos o tamanho/quantidade de caracteres da string

*/

$nome1 = "Rafael Queiroz";
$nome2 = "Fred, O gato";

echo $nome1 . " tem " . strlen($nome1) . " caracteres. <br>";
echo $nome2 . " tem " . strlen($nome2) . " caracteres. <br>";

$str1 = strlen($nome1);
$str2 = strlen($nome2);

if ($str1 > $str2) {

    echo "A string (" . $nome1 . ") é a maior. <br>";
    
} else if ($str1 < $str2 ){
    
    echo "A string (" . $nome2 . ") é a maior. <br>";

} else {

    echo "As stings tem o mesmo tamanho.";

}
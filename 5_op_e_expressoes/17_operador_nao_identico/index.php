<?php

    $a = 5;
    $b = 5;
    $c = 3;
    $d = "5";
    $e = "teste";

    // gettype para exibir o tipo de dado

    // Teste 1
    if ($a !== $b){
        echo "O tipo/valor de " . '$a' . " (" . gettype($a) . ": $a) não é idêntico ao tipo/valor de " . '$b' . " (" . gettype($b) . ": $b).";
        echo "<br><br>";
    }
    else {
        echo "O tipo/valor de " . '$a' . " (" . gettype($a) . ": $a) é idêntico ao tipo/valor de " . '$b' . " (" . gettype($b) . ": $b).";
        echo "<br><br>";
    }

    // Teste 2
    if ($a !== $c){
        echo "O tipo/valor de " . '$a' . " (" . gettype($a) . ": $a) não é idêntico ao tipo/valor de " . '$c' . " (" . gettype($c) . ": $c).";
        echo "<br><br>";
    }
    else {
        echo "O tipo/valor de " . '$a' . " (" . gettype($a) . ": $a) é idêntico ao tipo/valor de " . '$c' . " (" . gettype($c) . ": $c).";
        echo "<br><br>";
    }

    // Teste 3
    if ($a !== $d){
        echo "O tipo/valor de " . '$a' . " (" . gettype($a) . ": $a) não é idêntico ao tipo/valor de " . '$d' . " (" . gettype($d) . ": $d).";
        echo "<br><br>";
    }
    else {
        echo "O tipo/valor de " . '$a' . " (" . gettype($a) . ": $a) é idêntico ao tipo/valor de " . '$d' . " (" . gettype($d) . ": $d).";
        echo "<br><br>";
    }
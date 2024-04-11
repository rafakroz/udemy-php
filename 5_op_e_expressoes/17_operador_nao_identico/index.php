<?php

    $a = 5;
    $b = 5;
    $c = 3;
    $d = "5";
    $e = "teste";

    if ($a !== $b){
        echo "O valor/tipo de " . '$a' . " (Inteiro: $a) não é idêntico ao valor/tipo de " . '$b' . " (Inteiro: $b).";
        echo "<br><br>";
    }
    else {
        echo "O valor/tipo de " . '$a' . " (Interiro: $a) é idêntico ao valor/tipo de " . '$b' . " (Interiro: $b).";
        echo "<br><br>";
    }

    if ($a !== $c){
        echo "O valor/tipo de " . '$a' . " (Inteiro: $a) não é idêntico ao valor/tipo de " . '$c' . " (Interiro: $c).";
        echo "<br><br>";
    }
    else {
        echo "O valor/tipo de " . '$a' . " (Interiro: $a) é idêntico ao valor/tipo de " . '$c' . " (Interiro:$c).";
        echo "<br><br>";
    }

    if ($a !== $d){
        echo "O valor/tipo de " . '$a' . " (Inteiro: $a) não é idêntico ao valor/tipo de " . '$d' . " (String: $d).";
        echo "<br><br>";
    }
    else {
        echo "O valor/tipo de " . '$a' . " (Interiro: $a) é idêntico ao valor/tipo de " . '$d' . " (String: $d).";
        echo "<br><br>";
    }
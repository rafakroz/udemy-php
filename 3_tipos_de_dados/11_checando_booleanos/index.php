<?php

    $a = true;
    $b = false;

    if (is_bool($a)){
        echo "É um booleano 1<br>";
    }

    if (is_bool(0)){
        echo "É um booleano 2<br>";
    }
    
    if (is_bool($b)){
        echo "É um booleano 3<br>";
    }

    if (0 == false){
        echo "0 é considerado falso!<br>";
    }
<?php

    if (5 > 2){
        echo "Sem NOT: 5 > 2 <br>";
        echo "Resultado true <br><br>";
    }
    else{
        echo "Sem NOT: 5 > 2 <br>";
        echo "Resultado false <br><br>";
    }

    if (!(5 > 2)){
        echo "Com NOT: 5 > 2 <br>";
        echo "Resultado true <br><br>";
    }
    else{
        echo "Com NOT: 5 > 2 <br>";
        echo "Resultado false <br><br>";
    }
    
    $a = 10;
    $b = 20;
    
    if ($a >= $b){
        echo "Sem NOT: $a >= $b <br>";
        echo "Resultado true <br><br>";
    }
    else{
        echo "Sem NOT: $a >= $b <br>";
        echo "Resultado false <br><br>";
    }

    if (!($a > $b)){
        echo "Com NOT: $a >= $b <br>";
        echo "Resultado true <br><br>";
    }
    else{
        echo "Com NOT: $a >= $b <br>";
        echo "Resultado false <br><br>";
    }
    
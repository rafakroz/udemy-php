<?php

    echo 3 + 2 * 5;
    echo "<br>";
    echo "<br>";

    echo (3 + 2) * 5;
    echo "<br>";
    echo "<br>";

    echo 5 + 2 / 10;
    echo "<br>";
    echo "<br>";
    
    echo "Operação com variáveis:";
    echo "<br>";
    echo "<br>";
    
    $a = 5;
    $b = 2;
    $c = 10;
    
    echo $a + $b / $c;
    echo "<br>";
    echo "<br>";

    echo $c + $b / $a;
    echo "<br>";
    echo "<br>";
    
    $d = $a + $b / $c; //É possível encapsular uma expressão numa variável.
    
    echo $d; //E o resultado será exibido normalmente, pois, a operação será executada antes.
    echo "<br>";
    echo "<br>";

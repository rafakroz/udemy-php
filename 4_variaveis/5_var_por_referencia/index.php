<?php

    $x = 10;

    $y =& $x; //As variaveis estão conectadas. Alterar uma, altera as 2.

    echo $x;
    echo "<br>";
    echo "<br>";
    
    echo $y;
    echo "<br>";
    echo "<br>";

    $y = 15;

    echo "Atribuição após referência 1";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo "<br>";
    
    echo $y;
    echo "<br>";
    echo "<br>";

    $y = 20;

    echo "Atribuição após referência 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo "<br>";
    
    echo $y;
    echo "<br>";
    echo "<br>";
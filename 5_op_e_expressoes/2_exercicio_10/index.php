<?php

    $a = 10;
    $b = 2;
    $c = 3;

    $teste1 = $a - $b * $b;
    echo "A - B * B = $teste1";
    echo "<br>";
    echo "<br>";
    
    $subMult1 = ($a - $b) * $b;
    echo "(A - B) * B = $subMult1";
    echo "<br>";
    echo "<br>";
    
    $teste2 = $a - $b * $c;
    echo "A - B * C = $teste2";
    echo "<br>";
    echo "<br>";
    
    $subMult2 = ($a - $b) * $c;
    echo "(A - B) * C = $subMult1";
    echo "<br>";
    echo "<br>";
    
    $teste3 = $a - $b / $c;
    echo "A - B / C = $teste3";
    echo "<br>";
    echo "<br>";
    
    $subDiv1 = ($a - $b) / $c;
    echo "(A - B) / C = $subDiv1";
    echo "<br>";
    echo "<br>";
    
    $teste4 = $a - $c / $b;
    echo "A - C / B = $teste4";
    echo "<br>";
    echo "<br>";
    
    $subDiv2 = ($a - $c) / $b;
    echo "(A - C) / B = $subDiv2";
    echo "<br>";
    echo "<br>";
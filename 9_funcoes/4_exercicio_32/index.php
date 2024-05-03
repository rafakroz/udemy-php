<?php

/*

EXERCÍCIO 32

• Crie uma função
• Defina 3 variáveis númericas;
• Exiba a multiplicação destes números com um echo

*/

    function multiplicacao (){
        
        $num1 = 2;
        $num2 = 3;
        $num3 = 5;

        $resultado = $num1 * $num2 * $num3;

        echo $resultado . "<br>";

    }

    echo "O resultado da múltiplicação é :";
    
    multiplicacao(); //invocaçao
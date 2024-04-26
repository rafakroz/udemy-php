<?php

    /*Estrutura FOR
    
    for(contador; condicao; incremento){

        codigo

    }
    
    */

    //contador ; condição ; incremento
    for ($i = 0; $i < 10; $i++){

        echo "testando o FOR $i <br>";

    }
    
    echo "<br> Teste 2 --------------------------------- <br><br>";
    
    $nome = "Rafael";
    
    for ($i = 1; $i < 10; $i++){

        if ($i == 4 || $i == 6) {

            echo "$nome <br>";

            continue;

        }

        if ($i == 8){

            break;
        
        }

        echo "testando o FOR $i <br>";

    }
    
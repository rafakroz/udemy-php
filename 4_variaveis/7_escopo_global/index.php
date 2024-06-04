<?php

    $teste = "asd";

    echo "Global 1: $teste <br>";
    
    if(5 > 2){
        
        $teste = "dsa";
        
        echo "If 1: $teste";
        echo "<br>";
        
    }
    
    echo "Global 2: $teste <br>";
    
    function funcao(){
        
        $teste = "xxxxx";
        
        echo "Local 2: $teste <br>"; 
        
    }
    
    funcao();
    
    function testandoGlobal(){
        
        global $teste; //Usar Global para acessar a variavel global numa função
        
        $teste = 2; //Alterando localmente o valor da variável global
        
        echo "Variéavel Global: $teste <br>";
    }
    
    testandoGlobal();
    echo "Global 3: $teste <br>";
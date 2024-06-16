<?php
    // O escopo Global e local, não são alterados um pelo outro.
    
    $x = 10;

    echo "Global: $x <br>";
    
    function teste() {
        
        $x = 5;
        
        echo "Local: $x <br>";

    }
    
    teste();
    echo "<br>";
    echo "Global: $x <br>";
    teste();
    
    function testando(){
        
        $x= 12;
        
        echo "Local 2: $x <br>";
        
    }

    $x = 99;
    
    teste();
    echo "Global: $x <br>";
    // echo "<br>";
    testando();
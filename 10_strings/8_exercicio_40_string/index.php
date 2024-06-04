<?php

/*
EXERCÍCIO 40

• Percorra a string: "O rato roeu a roupa do rei de Roma", a partir de um loop;
• Imprima o número de letras "a" desta string;

*/

$frase = "O rato roeu a roupa do rei de Roma";

$contadorA = 0; // contador de interesse

for ($i = 0; $i < strlen($frase); $i++){

    if($frase[$i] == "a") { //percorre a string, procurando pelo condição

        $contadorA++; //quando achar, vai incrementar

    }

}

echo "O número de a's na frase é de: $contadorA";

echo "<br><br> Teste: Contar vogais ----------------------------- <br><br>";

$contadorB = 0;

for ($i = 0; $i < strlen($frase); $i++){

    if($frase[$i] == "a") { //percorre a string, procurando pelo condição

        $contadorB++; //quando achar, vai incrementar

    } else if ($frase[$i] == "e") {
        
        $contadorB++;

    } else if ($frase[$i] == "i"){

        $contadorB++;
    
    } else if ($frase[$i] == "o"){

        $contadorB++;
    
    } else if ($frase[$i] == "O"){

        $contadorB++;
    
    } else if ($frase[$i] == "u"){

        $contadorB++;
    
    }
    
}

echo "O número de vogais na frase é de: $contadorB";
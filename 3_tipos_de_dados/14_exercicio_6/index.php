<?php

    $carro = [
        'marca' => 'BMW',
        'rodas' => 4,
        'teto_solar' => true,
        'velocidade_max' => 300,
        'blindado' => false
    ];

    print_r($carro);
    echo "<br>";
    echo "<br>";
    
    $marca = $carro['marca'];
    $velocidade_max = $carro['velocidade_max'];
    
    echo "O carro é da marca $marca e atinge a velocidade máxima de $velocidade_max km/h.";
    echo "<br>";
<?php

/*
ALTERANDO O CASE DAS STRINGS

• Podemos alterar as strings para maiúsculas ou minúsculas com funções PHP;
• strtolower = todas as letras minúsculas;
• strtoupper = todas as letras maiúsculas;

*/

$texto1 = "esta string está em caixa baixa. <br>";

echo strtoupper($texto1);

$texto2 = "ESTA ESTÁ EM CAIXA ALTA. <br>";

echo strtolower($texto2);
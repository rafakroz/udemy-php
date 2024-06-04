<?php

/*
LIMPANDO UMA STRING

• Podemos remover os espaços em branco de uma string com funções de PHP;
• trim = limpa espaços antes e depois da string;
• ltrim = limpa espaços da parte inicial -> esquerda;
• rtrim = limpa espaços da parte final -> direita;

• É uma forma de retirar espaços desnecessários inseridos pelos usuários

• O PHP tenta remover, mas, ficam alguns espaços.

• É importante remover esses espaços, pois serão salvos no banco.
*/

$texto1 = "     Rafael    ";

$texto2 = "     Rafael";

$texto3 = "Rafael       ";

$strLimpa1 = trim($texto1);

$strLimpa2 = trim($texto2);

$strLimpa3 = trim($texto3);

echo "Texto 1: '     Rafael    ':" . $strLimpa1 . ".<br>";

echo "Texto 2: '     Rafael':". $strLimpa2 . ".<br>";

echo "Texto 3: 'Rafael    ':". $strLimpa3 . ".<br>";


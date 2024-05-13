<?php

/*
REMOVENDO tags HTML

• Podemos remover as tags de HTML de uma string com a função strip_tags;
• Geralmente para salvar dados no banco removemos as tags;

• Tranforma um texto com tags em texto puro.

*/

$textoHtml = "<p>Testando parágrafo. </p><div>Uma div</div><p>Outro parágrafo</p>";

echo "Texto com tags HTML, p e div:<br>";

echo $textoHtml . "<br><br>";

echo "------------------------------------------ <br><br>";

$salvarBanco = strip_tags($textoHtml);

echo "Texto com strip_tags aplicado na variável " . '$textoHtml' . ": <br><br>";

echo $salvarBanco;
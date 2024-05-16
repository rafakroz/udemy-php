<?php

/*
EXERCÍCIO 51

• Crie um array associativo com chaves com valor de nomes e valores com uma pontuação;

• ordene os dados do maior para o menor;

• Exiba uma lista, simulando um ranking, em HTML.

*/

$notas = [
    'Rafael' => 10.0,
    'Matheus Amancio' => 1.0,
    'Gabriel' => 9.5,
    'Luan' => 9.2,
    'Matheus Oliveira' => 2.0,
    'Felipe' => 8.9
];

print_r($notas);

echo "<br><br>";

arsort($notas);

print_r($notas);

echo "<br><br>";

//-----------------------
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Nota</th>
    </tr>
    <?php foreach ($notas as $nome => $nota): ?>
        <tr>
            <td>
                <?php echo $nome; ?>
            </td>
            <td>
                <?php echo $nota; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
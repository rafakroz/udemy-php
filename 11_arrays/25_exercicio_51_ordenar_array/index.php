<?php

/*
EXERCÍCIO 51

• Crie um array associativo com chaves com valor de nomes e valores com uma pontuação;

• ordene os dados do maior para o menor;

• Exiba uma lista, simulando um ranking, em HTML.

*/

$alunos = [
    'Rafael' => 10.0,
    'Matheus Amancio' => 1.0,
    'Gabriel' => 9.5,
    'Luan' => 9.2,
    'Matheus Oliveira' => 2.0,
    'Felipe' => 8.9
];

print_r($alunos);

echo "<br><br>";

arsort($alunos);

print_r($alunos);

echo "<br><br>";

//-----------------------
?>


<!-- <table border="1">
    <tr>
        <th>Nome</th>
        <th>Nota</th>
    </tr>
    <?php foreach ($alunos as $nome => $notas): ?>
        <tr>
            <td>
                <?php echo $nome; ?>
            </td>
            <td>
                <?php echo $notas; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table> -->

<h1>Ranking</h1>
<ol>
    <?php foreach ($alunos as $nome => $notas): ?>
        <li>
            <?php echo $nome; ?>: <?php echo $notas; ?>
        </li>
    <?php endforeach; ?>
</ol>
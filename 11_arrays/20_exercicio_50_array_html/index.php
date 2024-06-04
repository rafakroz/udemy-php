<?php

/*
EXERCÍCIO 50

• Crie um array associativo com nomes e idade;

• Imprima estes dados em uma tabela de HTML;

• Dica: utilize tags do elemento table 

*/

$pessoas = [
    'Esther' => 91,
    'Solange' => 59,
    'Rafael' => 40,
    'Fred' => 2
];

// tr = table row
// th = table heading
// td = table data

// A cada repetição do foreach, será gerada uma tr / linha

/*
Completo
<?php echo

Forma abreviada
<?=
*/

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach ($pessoas as $nome => $idade): ?>
        <tr>
            <td>
                <?php echo $nome; ?>
            </td>
            <td>
                <?= $idade; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
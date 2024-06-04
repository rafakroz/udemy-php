<?php

/*
PARÂMETRO COM MAIS DE UM VALOR

• Os inputs de checkbox podem conter mais de um valor;

• Para receber todos no backend, precisamos adicionar uma sintaxe de array no name;

• Assim, receberesmo todos os inputs marcados;

    Exemplo:
        name = "caracteristicas[]"

*/

    if(isset($_POST['ingredientes'])) { // se foi feito (enviado) POST pelo formulário

        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes); // exibindo os itens selecionados

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">

        <div>
            <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate <!-- ingrediente[] : vai agrupar todos os itens num array -->
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Abóbora"> Abóbora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Feijão"> Feijão
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>
</html>
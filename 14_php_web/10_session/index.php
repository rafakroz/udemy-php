<?php

/*
SESSIONS

• Com session podemos criar uma variável que persite em diferentes páginas e também perdura
por várias visitas ao mesmo site;

• A session utiliza recursos de cookies para seu funcionamento, e se o recurso
estiver desailitado propaga a sessão via URL;

• Sessions são utilizados para: autenticação, carrinho de compras e tudo o que precisa
persitir de página em página;

• Acaba sendo o recurso mais utilizado, comparando-o com o cookie;

--

• As session são salvas em arquivos no computador que estamos ou no servidr da aplicação;

• O caminho para onde os arquivos são salvos fic em php.ini na configuração session.save_path;

• As sessions podemser salvas em dois formatos:

    • O próprio do PHP;

    • Ou o Web Distributed eXchange (WDDX)

*/

// -------------------------------------------------------------------------------------------

    session_start(); // inicializando seção na página

    // print_r($_SESSION);

    $_SESSION['nome'] = 'Rafael'; // Na vida real, este dado viria do banco de dados

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Index</title>
</head>
<body>

    <h1>Index</h1>

    <div><a href="index.php">Index</a></div>
    <div><a href="pagina_1.php">Página 1</a></div>
    <div><a href="pagina_2.php">Página 1</a></div>

</body>
</html>
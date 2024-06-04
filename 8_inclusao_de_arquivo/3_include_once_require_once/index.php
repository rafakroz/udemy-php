<?php 

/*
INCLUDE ONCE E REQUIRE ONCE

• Os dois funcionam da mesma maneira que require e include;
• Porém impedem que o mesmo arquivo seja adicionado dmeias de uma vez na página;
• Método mais indicado para templates com PHP.
*/

    //arquivo que não existe
    //include_once "texte.php";

    //Arquivos existentes
    include_once "teste2.php";
    include_once "teste2.php"; // nada acontece, pois já foi incluído anteriormente

    //Arquivo que não existe
    //require_once "teste.php";

    require_once "teste3.php";
    require_once "teste3.php";

?>

    <p>Testando código!</p>
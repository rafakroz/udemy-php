<?php

    include_once("templates/header.php");

?>

    <div class="container">

        <?php if(isset($printMsg) && $printMsg != ''): ?>

            <p id="msg"><?= $printMsg ?></p>

        <?php endif; ?>

        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0): ?>

            <p>TEM CONTATOS</p>

        <?php else: ?>

            <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>


        <?php endif; ?>

    </div>

<?php

    include_once("templates/footer.php");

?>
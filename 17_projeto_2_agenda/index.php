<?php

    include_once("templates/header.php");

?>

    <div class="container">

        <?php if(isset($printMsg) && $printMsg != ''): ?>

            <p id="msg"><?= $printMsg ?></p>

        <?php endif; ?>

        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0): ?>

            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope="row"><?= $contact['id'] ?></td>
                            <td scope="row"><?= $contact['nome'] ?></td>
                            <td scope="row"><?= $contact['telefone'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php else: ?>

            <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>


        <?php endif; ?>

    </div>

<?php

    include_once("templates/footer.php");

?>
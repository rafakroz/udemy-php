<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>

        <h1 id="main-title">Criar contato</h1>

        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">

            <div class="form-group">
                <label for="name">Nome do Contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefone do Contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>

            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" rows="3" id="observations" name="observations" placeholder="Insira as Observações" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>

    </div>

<?php
    include_once("templates/footer.php");
?>
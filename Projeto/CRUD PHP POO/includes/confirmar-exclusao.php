<main>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form action="" method="post">

        <div class="form-group">
            <p>Tem certeza que Deseja Excluir a Vaga <strong><?= $obVaga->Titulo ?></strong></p>
        </div>

        <div class="form-group">

            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>

            <button type="submit" class="btn btn-danger" name="excluir">Excluir</button>

        </div>

    </form>
</main>
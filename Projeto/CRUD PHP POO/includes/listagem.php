<?php

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {

        case 'success':
            $mensagem = '<div class="alert alert-success">Ação Executada com Sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div class"alert alert-success">Ação Não Executada!</div>';
            break;
    }
}

$resultados = '';
foreach ($vagas as $vaga) {
    $resultados .= '<tr>
                        <td>' . $vaga->id_vaga . '</td>
                        <td>' . $vaga->Titulo . '</td>
                        <td>' . $vaga->Descricao . '</td>
                        <td>' . ($vaga->Ativo == 'Sim' ? 'Ativo' : 'Inativo') . '</td>
                        <td>' . date('d/m/Y à\s H:i:s', strtotime($vaga->Data)) . '</td>
                        <td>

                        <a href="editar.php?id_vaga=' . $vaga->id_vaga . '">
                            <button type="button" class="btn btn-primary">Editar</button>
                        
                            </a>

                        <a href="excluir.php?id_vaga=' . $vaga->id_vaga . '">
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </a>

                        </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                        <td colspan="6" class="text-center">Nenhuma Vaga Encontrada</td>
                                                   </tr>     '
?>

<main>

    <?= $mensagem ?>

    <section>

        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>

    </section>


    <section>

        <table class="table mt-3">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descricao</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>

    </section>

</main>
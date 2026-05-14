<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar Vaga');

use \App\Entity\Vaga;

if (!isset($_GET['id_vaga']) or !is_numeric($_GET['id_vaga'])) {
    header('location: index.php?status=error');
    exit;
}

$obVaga = Vaga::getVaga($_GET['id_vaga']);

if (!$obVaga instanceof Vaga) {
    header('location: index.php?status=error');
    exit;
}

// VALIDAÇÃO DO POST
if (isset($_POST['Titulo'], $_POST['Descricao'], $_POST['Ativo'])) {
    
    $obVaga->Titulo = $_POST['Titulo'];
    $obVaga->Descricao = $_POST['Descricao'];
    $obVaga->Ativo = $_POST['Ativo'];
    $obVaga->atualizar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';

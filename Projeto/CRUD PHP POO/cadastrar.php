<?php

require __DIR__ . '/vendor/autoload.php';
define('TITLE', 'Cadastrar Vaga');

use \App\Entity\Vaga;

// INSTÂNCIA DA VAGA (Garante que a variável exista para o formulário)
$obVaga = new Vaga;

// VALIDAÇÃO DO POST
if(isset($_POST['Titulo'],$_POST['Descricao'],$_POST['Ativo'])){
    $obVaga->Titulo = $_POST['Titulo'];
    $obVaga->Descricao = $_POST['Descricao'];
    $obVaga->Ativo = $_POST['Ativo'];
    $obVaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formulario.php';
include __DIR__ .'/includes/footer.php';

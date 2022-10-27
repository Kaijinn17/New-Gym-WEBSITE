<?php
require_once(__DIR__ . "/../config.php");


if (isset($_POST['update'])) {

    $id = $_GET['id'];
    $plano = $_GET['plano'];

    $sqlUpdate = "UPDATE clientes SET planos = '$plano' WHERE id = '$id'";
    $result = $pdo->query($sqlUpdate);

    $sqlAprovado = "UPDATE solicitacoes SET aprovado = '1' WHERE id = '$id'";
    $result = $pdo->query($sqlAprovado);
}

header("Location: ./solicitacoes.php");

<?php
require_once(__DIR__ . "/../config.php");


if (isset($_POST['update'])) {

    $id = $_GET['id'];
    $plano = $_GET['plano'];

    $sqlUpdate = "UPDATE clientes SET planos = '$plano' WHERE id = '$id'";
    $stmt = $pdo->prepare($sqlUpdate);
    $stmt->bindValue(":planos", $_GET['plano']);
    $sqlAprovado = "UPDATE solicitacoes SET aprovado = '1' WHERE id = '$id'";
    $stmt = $pdo->prepare($sqlAprovado);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        header("Location: ./solicitacoes.php");
        exit;
    }
}



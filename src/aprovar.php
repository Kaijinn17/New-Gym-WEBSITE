<?php
require_once('./config.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$id = $_GET['id'];
$plano = $_GET['plano'];

$sql = "UPDATE clientes SET planos = '$plano' WHERE id = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();

header("location: ../solicitacoes.php");

?>
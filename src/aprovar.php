<?php
require_once('./config.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$id = $_GET['id'];
$plano = $_GET['plano'];

$sql = "UPDATE clientes SET planos = '$plano' WHERE id = $id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":planos", $_GET['plano']);
$stmt->bindValue(":id", $_SESSION['id']);
$stmt->execute();

$sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$stmt->bindValue(":aprovado", $_GET['aprovado']);
$stmt->bindValue(":id", $_SESSION['id']);
$stmt->execute();

header("location: ../solicitacoes.php");

?>
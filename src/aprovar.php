<?php
require_once('./config.php');

$id = $_GET['id'];
$planos = $_GET['plano'];

$sql = "UPDATE clientes SET planos = $planos WHERE id = $id";
$sql = $connect->query($sql);
$sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$sql = $connect->query($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":planos", $_GET['plano']);
$stmt->bindValue(":id", $_SESSION['id']);
$stmt->execute();
header("location: ../solicitacoes.php");
exit;
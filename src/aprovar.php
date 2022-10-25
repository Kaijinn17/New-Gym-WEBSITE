<?php
require_once('./config.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$d = $_GET['id'];
$plano = $_GET['plano'];

$sql = "UPDATE clientes SET planos = '$plano' WHERE id = $id";
$sql = $pdo->query($sql);

$sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$sql = $pdo->query($sql);

header("location: ../solicitacoes.php");
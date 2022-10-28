<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$id = $_GET['id'];
$planos = $_GET['planos'];
$telefone = $_GET['telefone'];

$sql = "UPDATE clientes SET planos = '$planos' WHERE telefone = '$telefone'";
$sql = $pdo->query($sql);

$sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$sql = $pdo->query($sql);

header("Location: ../solicitacoes.php");

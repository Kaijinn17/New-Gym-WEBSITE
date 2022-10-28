<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

try{
$id = $_GET['id'];
$planos = $_GET['planos'];
$nome = $_GET['nome'];
$telefone = $_GET['telefone'];

$sql = "UPDATE clientes SET planos = '$planos' WHERE telefone = '$telefone'";
$sql = $pdo->query($sql);

$sql = "DELETE FROM solicitacoes WHERE telefone = '$telefone'";
$sql = $pdo->query($sql);

header("Location: ../solicitacoes.php");

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$planos = $_GET["planos"];
$nome = $_GET["nome"];

echo "$planos";
echo "$nome";

$sql = "INSERT INTO solicitacoes (nome, plano_antigo, plano_novo, aprovado) VALUES ('$nome', '$planos', 'semanal', 0)";
$sql = $pdo->query($sql);

header("Location: ../perfil.php");
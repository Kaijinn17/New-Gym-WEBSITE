<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$sql = "SELECT * FROM clientes";
$sql = $pdo->query($sql);

$id = $_SESSION["id"];
$nome = $_SESSION["nome"];
$planos = $_SESSION["planos"];


$sql = "INSERT INTO solicitacoes (id, nome, plano_antigo, plano_novo, aprovado) VALUES ('$id', '$nome', '$planos', 'trimestral', 0)";
$sql = $pdo->query($sql);

header("Location: ../perfil.php");

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
$nome = $_GET['nome'];
$planos = $_GET['planos'];

$sql = "INSERT INTO solicitacoes (id, nome, plano_antigo, plano_novo, aprovado) SELECT solicitacoes.$id, solicitacoes.$nome, solicitacoes.$planos, solicitacoes.'trimestral', solicitacoes.0 FROM solicitacoes";
$sql = $pdo->query($sql);

header("Location: ../perfil.php");

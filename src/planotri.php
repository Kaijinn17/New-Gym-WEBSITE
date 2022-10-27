<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");
include('/profile.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$sql = "SELECT * FROM clientes";
$sql = $pdo->query($sql);

$id = $_GET["id"];
$planos = $_GET["planos"];

$sql = "UPDATE clientes SET planos_antigo = '$planos' WHERE id = '$id'";
$sql = $pdo->query($sql);

$sql = "UPDATE clientes SET aprovado = 0 WHERE id = '$id'";
$sql = $pdo->query($sql);

header("Location: ../perfil.php");

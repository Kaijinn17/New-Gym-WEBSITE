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



$user = new stdClass;
try {
    $sql = "SELECT * FROM clientes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $_SESSION['id']);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_OBJ);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}


$isPhoto = $user->foto;
$planos = $user->planos;
$nome = $user->nome;
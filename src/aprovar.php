<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_POST['plano'])) {
    try {

        $id = $_POST['id'];
        $planos = $_POST['plano'];

        $sqlUpdate = "UPDATE clientes SET planos = $planos WHERE id = $id";
        $sqlAprovado = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
        $stmt = $pdo->prepare($sqlUpdate);
        $stmt = $pdo->prepare($sqlAprovado);
        $stmt->bindValue(":planos", $_POST['plano']);
        $stmt->bindValue(":id", $_POST['id']);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            header("Location: ../solicitacoes.php");
            exit;
        }
    } catch (PDOException $err) {
        echo "Error: " . $err->getMessage();
        exit;
    }
}

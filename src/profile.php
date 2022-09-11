<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");
require(__DIR__ . "/cadastro.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['plano'])) {
    try {
        $sql = "UPDATE clientes SET planos = :planos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":planos", $_GET['plano']);
        $stmt->bindValue(":id", $_SESSION['id']);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            header("location: ../perfil.php");
            exit;
        }
    } catch (PDOException $err) {
        echo "Error: " . $err->getMessage();
        exit;
    }
}

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

switch($planos) {
    case 'Trimestral':
        echo "<div>Trimestral</div";
        break;
    case 'Intermediario':
        echo "<div>Intermediario</div";
        break;
    case 'Semanal':
        echo "<div>Semanal</div";
        break;
}

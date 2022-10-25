<?php
require_once('./config.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['plano'])) {
    try {
$sql = "UPDATE clientes SET planos = '$planos' WHERE id = $id";
$sql = $connect->query($sql);

$sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$sql = $connect->query($sql);

$stmt->bindValue(":planos", $_GET['plano']);
        $stmt->bindValue(":id", $_SESSION['id']);
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

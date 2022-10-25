<?php
    require_once('./config.php');

    $id = $_GET['id'];
    $planos = $_GET['plano'];

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['plano'])) {
    try {
    $sql = "UPDATE clientes SET planos = :planos WHERE id = :id";
    $sql = $connect->query($sql);
    $sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = :id";
    $sql = $connect->query($sql);
    if ($stmt->rowCount() > 0) {
    header("location: ../solicitacoes.php");
    exit;
}
} catch (PDOException $err) {
echo "Error: " . $err->getMessage();
exit;
}
}

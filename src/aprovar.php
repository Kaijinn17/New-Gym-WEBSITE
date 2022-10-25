<?php
    require_once('./config.php');

    $id = $_GET['id'];
    $planos = $_GET['planos'];

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['plano'])) {
    try {
    $sql = "UPDATE clientes SET planos = $planos WHERE id = $id";
    $sql = $connect->query($sql);
    $stmt->execute();
    $sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
    $sql = $connect->query($sql);
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

?>
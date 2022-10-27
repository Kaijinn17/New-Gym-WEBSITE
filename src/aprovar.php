<?php
require_once('./config.php');


$id = $_GET['id'];
$plano = $_GET['plano'];

if(isset($_POST['update'])) {
$sqlUpdate = "UPDATE clientes SET planos = '$plano' WHERE id = $id";
$result = $pdo->query($sqlUpdate);

$sqlAprovado = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$result = $pdo->query($sqlAprovado);

}

header("Location: ../solicitacoes.php");

?>
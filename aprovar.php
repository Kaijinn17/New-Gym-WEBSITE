<?php
    require_once('./config.php');

    $id = $_GET['id'];
    $planos = $_GET['plano'];


    $sql = "UPDATE clientes SET plano = '$planos' WHERE id = $id";
    $sql = $connect->query($sql);

    $sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
    $sql = $connect->query($sql);
    
    header("Location: solicitacoes.php");
?>
<?php
    require_once('./config.php');

    $id = $_GET['id'];
    $plano = $_GET['planos'];


    $sql = "UPDATE clientes SET planos = :planos WHERE id = :id";
    $sql = $connect->query($sql);

    $sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = :id";
    $sql = $connect->query($sql);
    
    header("Location: ./solicitacoes.php");
?>
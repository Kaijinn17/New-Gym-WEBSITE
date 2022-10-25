<?php
require_once('./config.php');

$id = $_GET['id'];
$plano = $_GET['plano'];

$sql = "UPDATE clientes SET planos = $plano WHERE id = $id";
$sql = $connect->query($sql);
$sql = "UPDATE solicitacoes SET aprovado = 1 WHERE id = $id";
$sql = $connect->query($sql);
header("location: ./solicitacoes.php");

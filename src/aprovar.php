<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$id = $_GET['id'];
$planos = $_GET['planos'];
$nome = $_GET['nome'];
$telefone = $_GET['telefone'];

$sql = "UPDATE clientes SET planos = '$planos' WHERE telefone = '$telefone'";
$sql = $pdo->query($sql);

$sql = "DELETE FROM solicitacoes WHERE telefone = '$telefone'";
$sql = $pdo->query($sql);

if(isset($_GET['cpf'])){ 

    #Recebe o telefone Postado
    $telefone = $_GET['telefone'];

    #Conecta banco de dados 
    $sql = $pdo->query($sql);
    $sql = mysqli_query($Mysqli, "SELECT 
    telefone 
        FROM 
         solicitacoes
         WHERE 
             telefone = '".$telefone."'");

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 

        echo json_encode(array('telefone' => TRUE,'msg' => 'Você Já Fez Uma Solicitação')); 

    else 
        echo json_encode(array('telefone' => FALSE ));


}


header("Location: ../solicitacoes.php");

<?php
require_once(__DIR__ . "/../config.php");
$tableName = "clientes";
//cria a table caso ela não exista
try {
    $sql = "CREATE TABLE IF NOT EXISTS `" . $tableName . "` (";
    $sql .= "id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,";
    $sql .= "nome varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "data_nascimento date NOT NULL,";
    $sql .= "telefone varchar(80) NOT NULL UNIQUE COLLATE utf8mb4_unicode_ci,";
    $sql .= "email varchar(80) NOT NULL UNIQUE COLLATE utf8mb4_unicode_ci,";
    $sql .= "senha varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "genero varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "planos varchar(200) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "foto varchar(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci";
    $sql .= ")ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    exit;
}

$tableName2 = "solicitacoes";

try {
    $sql = "CREATE TABLE IF NOT EXISTS `" . $tableName2 . "` (";
    $sql .= "id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,";
    $sql .= "nome varchar(80) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "plano_antigo varchar(200) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "plano_novo varchar(200) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= "aprovado varchar(1) NOT NULL COLLATE utf8mb4_unicode_ci,";
    $sql .= ")ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    exit;
}
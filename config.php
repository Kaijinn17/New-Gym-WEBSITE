<?php

$endereco = 'localhost';
$banco = 'akdemia';
$usuario = 'root';
$senha = '';

try {
  $pdo = new PDO("mysql:host=$endereco;port=5432;charset=utf8;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
  die($e->getMessage());
}

<?php

$endereco = 'localhost';
$banco = 'akdemia';
$usuario = 'root';
$senha = '';
$port = '3306';

try {
  $pdo = new PDO("mysql:host=$endereco;port=$port;charset=utf8;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
  die($e->getMessage());
}

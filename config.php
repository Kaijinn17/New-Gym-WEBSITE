<?php

$endereco = 'localhost';
$banco = 'akdemia';
$usuario = 'whoami';
$senha = 'akdemiacetep';

try {
  $pdo = new PDO("mysql:host=$endereco;port=3307;charset=utf8;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
  die($e->getMessage());
}

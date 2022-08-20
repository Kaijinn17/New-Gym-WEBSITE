<?php

$endereco = $_SERVER['db_host'];
$banco = $_SERVER['db_database'];
$usuario = $_SERVER['db_user'];
$senha = $_SERVER['db_password'];

try {
  $pdo = new PDO("mysql:host=$endereco;port=$_SERVER[db_port];charset=utf8;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
  die($e->getMessage());
}

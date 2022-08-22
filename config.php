<?php

$endereco = $_SERVER['db_host'];
$banco =  $_SERVER['db_database'];
$usuario =  $_SERVER['db_user'];
$senha =  $_SERVER['db_password'];
$port = '3306';

try {
  $pdo = new PDO("mysql:host=$endereco;port=$port;charset=utf8;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
  die($e->getMessage());
}

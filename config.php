<?php
$endereco = 'ec2-54-85-56-210.compute-1.amazonaws.com';
$banco = 'dfopd816p36hgh';
$usuario = 'vivuuvngcdbszv';
$senha = '8b0e2945b9a7a493843837d2fd2c22585136ce20f859ee51517857780f47ebf1';

try {
    $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


    echo "Conectado no Banco de dados";
} catch (PDOException $e) {

  echo "Falha ao conectar. <br/>";
  die($e->getMessage());

}

?>
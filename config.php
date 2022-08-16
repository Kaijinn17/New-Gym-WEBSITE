<?php
$server = 'ec2-54-85-56-210.compute-1.amazonaws.com';
$user = 'vivuuvngcdbszv';
$password = '8b0e2945b9a7a493843837d2fd2c22585136ce20f859ee51517857780f47ebf1';
$port = "5432";

$infos_string = "host=$server port=$port dbname=postgres user=$user password=$password";

$conection = pg_connect($infos_string) or
die ("Não foi possível conectar ao servidor");
echo "Conexão efetuada com Sucesso";

pg_close($conection) or
die ("Não foi possível desconectar");
echo "<br>Desconectado com sucesso";

?>
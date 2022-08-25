<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$data = date("Y/m/d");           
$comentario=$_POST['comentario']; 
if(strlen($_POST['nome'])) #insere somente se no form foi escrito o nome
{
    $sql = "INSERT INTO tbcomentarios(nome,email,data,comentario) 
    values('$nome','$email','$data','$comentario')";
}
$sql = "SELECT * FROM tbcomentarios ORDER BY id desc";
$executar=($sql);
while( $exibir = ($executar)){
    echo $exibir['data'];
    echo "</br>";
    echo $exibir['nome'];
    echo "</br>";
    echo $exibir['email'];
    echo "</br>";
    echo $exibir['comentario'];
    echo "</br><hr>";
}
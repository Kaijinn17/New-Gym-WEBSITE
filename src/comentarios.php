<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$data = date("Y/m/d");           
$comentario=$_POST['comentario']; 
if(strlen($_POST['nome'])) #insere somente se no form foi escrito o nome
{
    $insert = mysql_query("INSERT INTO tbcomentarios(nome,email,data,comentario) 
    values('$nome','$email','$data','$comentario')");
}
$sql = "SELECT * FROM tbcomentarios ORDER BY id desc";
$executar=mysql_query($sql);
while( $exibir = mysql_query($executar)){
    echo $exibir['data'];
    echo "</br>";
    echo $exibir['nome'];
    echo "</br>";
    echo $exibir['email'];
    echo "</br>";
    echo $exibir['comentario'];
    echo "</br><hr>";
}
<?php

include('config.php');

$servidor = "ec2-54-85-56-210.compute-1.amazonaws.com/";
//Aqui é o nome de usuário do seu banco de dados, root é o servidor inicial e
//básico de todo servidor, mas recomenda-se não usar o usuario root e sim criar um novo usuário
$usuario = "vivuuvngcdbszv";
//Aqui colocamos a senha do usuário, por padrão o usuário root vem sem senha,
//mas é altamente recomendável criar uma senha para o usuário root, visto que ele é
//o que tem mais privilégios no servidor
$senha ="8b0e2945b9a7a493843837d2fd2c22585136ce20f859ee51517857780f47ebf1";

//Aqui criamos a conexão utilizando o servidor, usuario e senha,
//caso dê erro, retorna um erro ao usuário.
$conexao = pg_connect($servidor, $usuario, $senha) or
die ("Não foi possível conectar ao servidor PostGreSQL");
//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
echo "Conexão efetuada com sucesso!!";



if(isset($_POST['email']) || isset($_POST['senha'])) {

   if(strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
   } else if(strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
   } else{

    $email =  $mysqli->real_escape_string($_POST['email']);
    $senha =  $mysqli->real_escape_string($_POST['senha']);

       $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
       $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

       $quantidade = $sql_query->num_rows;

       if($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] =  $usuario['nome'];

        header("Location: logar.php");

       } else{
        echo "Falha ao logar! E-mail ou senha incorretos";
       }

   }

}

?>
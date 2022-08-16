<?php include_once"config.php"; ?>

<?php

$nome = $_POST['name'];
$telefone = $_POST['phone'];
$email = $_POST['email'];
$senha = $_POST['password'];
$data_nascimento = $_POST['date'];
$genero = $_POST['select'];

$sql = "INSERT INTO users(nome,telefone,email,senha,data_nascimento,genero)VALUES('$nome','$telefone','$email','$senha','$data_nascimento','$genero') ";


if (mysqli_query($conn, $sql)){

     header("Location: logar.php");

}

else{

     echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);

}


mysqli_close($conn);

?>

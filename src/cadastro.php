<?php
require_once './createTable.php';
require_once '../config.php';


if (
  !empty($_POST) &&
  isset($_POST['name']) &&
  isset($_POST['date']) &&
  isset($_POST['phone']) &&
  isset($_POST['email']) &&
  isset($_POST['password']) &&
  isset($_POST['genero']) &&
  isset($_POST['planos']) &&
  isset($_POST['agree'])
) {

  // Está chegando dados por POST e então posso tentar inserir no banco
  // Obter as informações do formulário ($_POST)
  try {


    // Preparar as informações
    // Montar a SQL (pgsql)
    $sql = "INSERT INTO clientes
                  (nome, data_nascimento, telefone, email, senha, genero, planos)
                VALUES
                  (:nome, :dataNascimento, :telefone, :email, :senha, :genero, :planos)";

    // Preparar a SQL (pdo)
    $stmt = $pdo->prepare($sql);

    // Definir/organizar os dados p/ SQL
    $dados = array(
      ':nome' => $_POST['name'],
      ':dataNascimento' => $_POST['date'],
      ':telefone' => $_POST['phone'],
      ':email' => $_POST['email'],
      ':senha' => md5($_POST['password']),
      ':genero' => $_POST['genero'],
      ':planos' => $_POST['planos']
    );

    // Tentar Executar a SQL (INSERT)
    // Realizar a inserção das informações no BD (com o PHP)
    if ($stmt->execute($dados)) {
      header("Content-type: application/json; charset=utf-8");
      echo json_encode(array("success" => true, "message" => "Cadastro Realizado Com Suceso"));
    }
  } catch (PDOException $e) {
    header("Content-type: application/json; charset=utf-8");
    echo json_encode(array("success" => false, "message" => "Falha ao cadastrar: email ou número de telefone já cadastrado" . $e->getCode()));
  }
} else {
  die();
}

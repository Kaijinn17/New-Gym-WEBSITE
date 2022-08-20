<?php
require_once './createTable.php';
require_once('../config.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (empty($_POST['email'])) {
        echo "Preencha seu e-mail";
        header("location: ../logar.php");
        exit;
    } else if (empty($_POST['senha'])) {
        echo "Preencha sua senha";
        header("location: ../logar.php");
        exit;
    } else {
        $user =  new stdClass();
        try {
            $sql = "SELECT * FROM clientes WHERE email = :email AND senha = :senha";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":email", $_POST['email']);
            $stmt->bindValue(":senha", md5($_POST['senha']));
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_OBJ);
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                    $_SESSION['id'] = $user->id;
                    $_SESSION['nome'] =  $user->nome;
                }
                header("location: ../logado.php");
                exit;
            } else {
                header("location: ../logar.php");
                exit;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

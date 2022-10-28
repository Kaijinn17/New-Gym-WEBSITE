<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/createTable.php';
require_once(__DIR__ . "/../config.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_FILES["profile_image"])) {

    $uploadNames = array();
    $uploadTypes = array();
    $uploadTmpNames = array();
    $uploadErrors = array();
    $uploadSizes = array();
    $uploadDir = __DIR__ . "/uploads";
    $allowupload = false;
    $extensionformats = array("jpg", "png", "jpeg");
    $newFileName = array();
    $mimeTypes = array(
        "image/png",
        "image/jpeg",
        "image/jpg"
    );

    getInformationFromFiles($_FILES["profile_image"], $uploadNames, $uploadTypes, $uploadTmpNames, $uploadErrors, $uploadSizes);
    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir)) { //cria o diretorio se ele não existir!
            echo "Não Foi Possivel Criar O Diretorio!<br>Falha Ao Realizar Upload<br>";
            exit();
        }
    }

    foreach ($uploadTmpNames as $key => $value) {
        $allowupload = false;
        $format = "";
        if (preg_match('/\./', $uploadNames[$key])) { //verifica se a string possui ponto
            $format =  substr($uploadNames[$key], (strripos($uploadNames[$key], ".") + 1), (strlen($uploadNames[$key]) - 1));
            if (array_search(strtolower($format), $extensionformats) !== false) {
                $allowupload = true; //Formato Permitido!
            } else {
                $allowupload = false;
            }
        } else { // nesse caso $allowupload, vai continuar como false, e o arquivo respectivo não vai ser aceito;
            $allowupload = false;
        }

        if (!array_search($uploadTypes[$key], $mimeTypes) !== false && $allowupload) {
            //nesse caso $allowupload, vai continuar como false, e o arquivo respectivo não vai ser aceito;
            echo $uploadNames[$key] . "<br>não aceitamos este tipo de arquivo, Produto não cadastrado!<br>";
            $allowupload = false;
        }

        if (!@getimagesize($uploadTmpNames[$key]) !== false && $allowupload) {
            //nesse caso as formas anterior aceitou o upload de forma indevida, então devemos mudar o status de $allowupload para false, para negar o upload!
            $allowupload = false;
        }

        if ($allowupload) { //faz upload apenas se $allowupload, for true!
            $fileNameP[$key] = str_replace(",", "", $uploadNames[$key]);
            $newFileName[$key] = uniqid(rand()) . "." . $format; //concatena um texto aleatorio + o nome original do arquivo recebido!
            $isUploaded = move_uploaded_file($value, $uploadDir . "./uploads" . $newFileName[$key]);
            if ($isUploaded) {
                try {
                    $sql = "UPDATE clientes SET foto = :foto WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(":id", $_SESSION['id']);
                    $stmt->bindValue(":foto", $newFileName[$key]);
                    $stmt->execute();
                } catch (PDOException $e) {
                    header("Content-type: application/json; charset=utf-8");
                    echo json_encode(array("success" => false, "message" => "Erro ao vincular foto ao usuario: " . $e->getMessage()));
                    exit;
                }
                header("Content-type: application/json; charset=utf-8");
                echo json_encode(array("success" => true, "message" => "Upload Realizado Com Sucesso!", "path" => "./uploads/$newFileName[$key]"));
                exit;
            } else {
                header("Content-type: application/json; charset=utf-8");
                echo json_encode(array("success" => false, "message" => "Erro ao enviar foto, erro desconhecido!"));
                exit;
            }
        } else {
            header("Content-type: application/json; charset=utf-8");
            echo json_encode(array("success" => false, "message" => "Não foi possivel fazer upload da imagem $uploadNames[$key]<br>Verifique se a imagem enviada, é uma imagem suportada!<br>Imagens Suportadas: jpg, png, jpeg"));
            exit();
        }
    }
}



function getInformationFromFiles(array $objectFile, array &$uploadNames, array &$uploadTypes, array &$uploadTmpName, array &$uploadError, array &$uploadSize)
{
    foreach ($objectFile as $key => $value) {
        if ($key == "name") {
            if (is_array($value)) {
                foreach ($value as $key1 => $value1) {
                    array_push($uploadNames, $value1);
                }
            } else {
                array_push($uploadNames, $value);
            }
        } else if ($key == "type") {
            if (is_array($value)) {
                foreach ($value as $key1 => $value1) {
                    array_push($uploadTypes, $value1);
                }
            } else {
                array_push($uploadTypes, $value);
            }
        } else if ($key == "tmp_name") {
            if (is_array($value)) {
                foreach ($value as $key1 => $value1) {
                    array_push($uploadTmpName, $value1);
                }
            } else {
                array_push($uploadTmpName, $value);
            }
        } else if ($key == "error") {
            if (is_array($value)) {
                foreach ($value as $key1 => $value1) {
                    array_push($uploadError, $value1);
                }
            } else {
                array_push($uploadError, $value);
            }
        } else if ($key == "size") {
            if (is_array($value)) {
                foreach ($value as $key1 => $value1) {
                    array_push($uploadSize, $value1);
                }
            } else {
                array_push($uploadSize, $value);
            }
        }
    }
}

<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION['id'])) {
  die("Você precisa logar em uma conta para acessar está Página.<p><a href=\"logar.php\">Entrar </a></p>");
}
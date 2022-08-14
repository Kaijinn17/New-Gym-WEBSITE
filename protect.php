<?php

if(!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_SESSION['id'])) {
    die("Você precisa logar em uma conta para acessar está Página.<p><a href=\"login.html\">Entrar </p>");
  }


?>
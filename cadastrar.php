<?php
ini_set("display_errors", false);
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Cadastro</title>
  <link rel="stylesheet" href="./assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="./assets/css/cadastro.css" media="screen">

  <script class="u-script" type="text/javascript" src="./assets/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="./assets/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Site1",
      "logo": "images/akdemia2.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Cadastro">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body data-home-page="./home.php" data-home-page-title="Página Inicial" class="u-body u-xl-mode" data-lang="pt">
  <header class="mb-2">
  <nav class="navbar navbar-expand-lg navbar-dark mb-2" style="background-color: black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./perfil.php"><img src="./assets/images/akdemia3.png" alt="" width="158px" height="44.63px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./home.php#sec-85ba">Contato</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./home.php#sec-6969">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./home.php#carousel_28e0">Personals</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="u-black u-clearfix u-section-1" id="sec-f616">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-custom-font u-font-oswald u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-title u-text-1">Criar Conta</h1>
      <div class="u-form u-form-1">
        <div id="registerStatus"></div>
        <form action="./src/cadastro.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
          <div class="u-form-group u-form-name">
            <label for="name-7cb6" class="u-label">Nome</label>
            <input type="text" placeholder="Insira seu Nome" id="name-7cb6" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-phone u-form-group-2">
            <label for="phone-16f2" class="u-label">Telefone</label>
            <input type="tel" placeholder="Insira seu telefone (ex: +14155552675)" id="phone-16f2" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="11" required required="">
          </div>
          <div class="u-form-email u-form-group u-form-partition-factor-2">
            <label for="email-7cb6" class="u-label">Email</label>
            <input type="email" placeholder="Insira um endereço de email válido" id="email-7cb6" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
            <label for="text-ba05" class="u-label">Senha</label>
            <input type="password" placeholder="Digite a sua senha" id="text-ba05" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" minlength="8" required="">
          </div>
          <div class="u-form-date u-form-group u-form-group-5">
            <label for="date-5b56" class="u-label">Data de Nascimento</label>
            <h3 style="color: gray; font-size: 15px; display: inline-block;">*Idade minima '14 Anos'*</h3>
            <input type="date" placeholder="MM/DD/YYYY" id="date-5b56" max="2008-12-31" name="date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-select u-form-group-6">
            <label for="select-c568" class="u-label">Gênero</label>
            <div class="u-form-select-wrapper">
              <select id="select-c568" name="genero" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
              </select>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                <path fill="currentColor" d="M4 8L0 4h8z"></path>
              </svg>
            </div>
          </div>
          <div class="u-form-group u-form-select u-form-group-6">
            <label for="select-c569" class="u-label">Escolha o seu Plano</label>
            <div class="u-form-select-wrapper">
              <select id="select-c569" name="planos" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                <option value="trimestral">Tri-mestral, Segunda a Sábado $180,00</option>
                <option value="intermediario">3 Vezes Na Semana $70,00</option>
                <option value="semanal">Segunda a Sábado $80,00</option>
              </select>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                <path fill="currentColor" d="M4 8L0 4h8z"></path>
              </svg>
            </div>
          </div>
          <div class="u-form-agree u-form-group u-form-group-7">
            <input type="checkbox" id="agree-1b1f" name="agree" class="u-agree-checkbox" required="">
            <label for="agree-1b1f" class="u-label">Eu aceito os <a href="#">Termos de Serviço</a>
            </label>
          </div>
          <div class="u-align-center u-form-group u-form-submit">

            <input type="submit" id="btnRegister" name="btn-cadastrar" value="Enviar" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">
          </div>
        </form>
      </div>
      <a href="logar.php" data-page-id="59568410" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-active-palette-4-base u-text-hover-palette-4-base u-text-palette-3-base u-btn-2">Já é membro? clique aqui.<span style="font-size: 1.125rem;">
          <span style="font-size: 1.25rem;"></span>
        </span>
      </a>
    </div>
  </section>


  <footer style="background-color:gray;bottom:0; width:100%; text-align:center;" class="footer" id="sec-6969">
    <div class="container mt-3">
      <div class="row">

      </div>
      <hr class="bg-white">
      <div class="row mb-1">
        <div class="col-md-12 d-flex justify-content-center">
          <p class="u-small-text u-text u-text-variant u-text-1">Este site é apenas um projeto de estudantes do 3 Ano do Ensino Médio, Nada aqui deve ser realmente levado a sério.</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <span class="text-white">© 2022 - <?php echo date("Y") ?>, Inc</span>
        </div>
      </div>
    </div>
  </footer>

  <script src="./assets/js/fetchForm.js"></script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
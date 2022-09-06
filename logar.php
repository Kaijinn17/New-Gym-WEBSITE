<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Login</title>
  <link rel="stylesheet" href="./assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="./assets/css/login.css" media="screen">
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
  <meta property="og:title" content="Login">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
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
            <li class="nav-item">
              <a class="nav-link" href="treinos.php">Treinos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="u-black u-clearfix u-section-1" id="sec-f616">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-custom-font u-font-oswald u-text u-text-custom-color-1 u-text-default u-title u-text-1">Acessar Conta</h1>
      <div class="u-form u-form-1">
        <form action="./src/login.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
          <div class="u-form-email u-form-group">
            <label for="email-7cb6" class="u-label">Email</label>
            <input type="email" placeholder="Insira um endereço de email válido" id="email-7cb6" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-group-2">
            <label for="text-ba05" class="u-label">Senha</label>
            <input type="password" placeholder="Digite a sua senha" id="text-ba05" name="senha" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
          </div>
          <div class="u-form-checkbox u-form-group u-form-group-3">
            <input type="checkbox" checked id="checkbox-643c" name="checkbox" value="On">
            <label for="checkbox-643c" class="u-label">Lembrar Senha</label>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <input type="submit" value="Login" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">
          </div>
        </form>
      </div>
      <a href="./cadastrar.php" data-page-id="13566755" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-active-palette-4-base u-text-hover-palette-4-base u-text-palette-3-base u-btn-2">Ainda não tem uma conta? clique aqui<span style="font-size: 1rem;"></span>
      </a>
    </div>
  </section>


  <footer class="mt-auto bg-secondary footer mt-5" id="sec-6969">
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <ul class="list-unstyled">
            <li class="text-white"><a class="text-decoration-none link-light" href="https://github.com/Kaijinn17/New-Gym-WEBSITE" target="_blank">Repositório do
                projeto</a></li>
          </ul>
        </div>
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


  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
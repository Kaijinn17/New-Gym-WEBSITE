<?php include('./src/protect.php'); ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Página Inicial</title>
  <link rel="stylesheet" href="./assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="./assets/css/home.css" media="screen">
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
  <meta property="og:title" content="Página Inicial">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="./perfil.php"><img src="./assets/images/akdemia2.png" alt="" width="158px" height="44.63px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./perfil.php">
                <div class="text-white">
                  <?php if (isset($_SESSION['nome'])) echo $_SESSION['nome'];?>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./src/logout.php">
                <button type="button" class="btn btn-sm btn-outline-danger">Sair</button>
              </a>
            </li> 
          </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./logado.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./logado.php#sec-85ba">Contato</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./logado.php#sec-6969">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./logado.php#carousel_28e0">Personals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="treinos.php">Treinos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
 
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

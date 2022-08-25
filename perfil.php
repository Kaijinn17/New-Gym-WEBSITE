<?php require_once(__DIR__ . '/src/protect.php'); ?>
<?php require_once(__DIR__ . '/src/profile.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Perfil</title>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página De Perfil">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #c3c3c3;">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./perfil.php"><img src="./assets/images/akdemia2.png" alt="" width="158px" height="44.63px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./perfil.php">
                                <div class="text-white">
                                    Bem Vindo, <?php if (isset($_SESSION['nome'])) echo $_SESSION['nome'];
                                                else echo "null"; ?>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./src/logout.php">
                                <button type="button" class="btn btn-sm btn-outline-danger">Sair</button>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./logado.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./perfil.php">Perfil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./logado.php#sec-85ba">Contato</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./perfil.php#sec-6969">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./logado.php#carousel_28e0">Personals</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1 class="d-flex justify-content-center">Perfil Do Usuario</h1>
                <div class="col-md-3">
                    <div id="infoUpload">
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Profile
                        </div>
                        <div class="card-body">
                            <?php if ($isPhoto == null) : ?>
                                <img src="./assets/images/profile_picture_man.jpg" class="card-img-top" id="profile_photo" alt="porfilePhoto" width="300px">
                                <p class="card-text d-flex justify-content-center" class="mt-2" id="send_photo">
                                    <a href="#">Enviar Foto</a>
                                </p>
                                <input type="file" style="display:none;" id="file" name="file" />
                            <?php else : ?>
                                <img src="./src/uploads/<?php echo $isPhoto; ?>" class="card-img-top" id="profile_photo" alt="porfilePhoto" width="300px">
                                <p class="card-text d-flex justify-content-center" class="mt-2" id="send_photo">
                                    <a href="#">Enviar Foto</a>
                                </p>
                                <input type="file" style="display:none;" id="file" name="file" />
                            <?php endif; ?>
                            <h5 class="card-title d-flex justify-content-center"><?php echo ucfirst($user->nome); ?></h5>
                            <p class="card-text">

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>ID: </td>
                                        <td><?php echo $user->id; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Data de nascimento: </td>
                                        <td><?php echo $user->data_nascimento; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Telefone: </td>
                                        <td><?php echo $user->telefone; ?></td>
                                    </tr>
                                    <tr>
                                        <td>E-mail: </td>
                                        <td><?php echo $user->email; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Genero: </td>
                                        <td><?php echo $user->genero; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Plano: </td>
                                        <td><?php echo $user->planos; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                        </div>
                        <div class="card-footer">
                            <?php date_default_timezone_set("America/Sao_Paulo"); ?>
                            <?php echo date('Y-m-d H:i:s') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h1 class="d-flex justify-content-center">Planos</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-between">





                <div class="col-md-3">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-success">
                            <div class="d-flex justify-content-center fw-bold">
                                Plano Trimestral
                            </div>
                        </div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Preço</h5>
                            <p class="card-text">180,00 (Desconto de 25%)</p>
                        </div>
                        <div class="card-footer bg-transparent border-success">
                            <h5 class="card-title">Periodo</h5>
                            <p class="card-text">Segunda a sabado.</p>
                            <p class="card-text d-flex justify-content-center">
                                <a href="./src/profile.php?plano=trimestral" class="w-100">
                                    <button class="btn btn-success w-100">
                                        Adiquirir
                                    </button>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-info mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-info">
                            <div class="d-flex justify-content-center fw-bold">
                                Plano Intermediario
                            </div>
                        </div>
                        <div class="card-body text-info">
                            <h5 class="card-title">Preço</h5>
                            <p class="card-text">70,00</p>
                        </div>
                        <div class="card-footer bg-transparent border-info">
                            <h5 class="card-title">Periodo</h5>
                            <p class="card-text">3 dias da semana a sua escolha.</p>
                            <p class="card-text d-flex justify-content-center">
                                <a href="./src/profile.php?plano=intermediario" class="w-100">
                                    <button class="btn btn-info w-100">
                                        Adiquirir
                                    </button>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-secondary">
                            <div class="d-flex justify-content-center fw-bold">
                                Plano Semanal
                            </div>
                        </div>
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Preço</h5>
                            <p class="card-text">80,00 (Desconto 50%)</p>
                        </div>
                        <div class="card-footer bg-transparent border-secondary">
                            <h5 class="card-title">Periodo</h5>
                            <p class="card-text">Segunda a Sabado.</p>
                            <p class="card-text d-flex justify-content-center">
                                <a href="./src/profile.php?plano=semanal" class="w-100">
                                    <button class="btn btn-secondary w-100">
                                        Adiquirir
                                    </button>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="./assets/js/photoUpload.js"></script>
</body>

</html>
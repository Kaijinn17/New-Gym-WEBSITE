<?php include('./src/protect.php'); ?>
<?php require_once(__DIR__ . '/src/profile.php'); ?>
<?php include("./config.php"); ?>

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

  <style>
    .btn-sair {
      margin-left: 20px;
      background-color: red;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      width: 100px;
      font-family: fantasy;
    }

    .btn-sair:hover {
      background-color: #680000;
    }
  </style>
</head>

<body style="background-color:gray;" data-home-page="home.html" data-home-page-title="Página Inicial" class="u-body u-xl-mode" data-lang="pt">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./perfil.php"><img src="./assets/images/akdemia3.png" alt="" width="158px" height="44.63px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./perfil.php">
                <div class="text-white">
                  <?php if (isset($_SESSION['nome'])) echo $_SESSION['nome']; ?>
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
              <a class="nav-link active" aria-current="page" href="./logado.php">Home</a>
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
              <a class="nav-link" href="treinos.php">Treinos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./perfil.php">Perfil</a>
            </li>
            <?php if ($_SESSION['id'] == 1) : ?>
              <li class='nav-item'>
                <a class='nav-link' href='./solicitacoes.php'>Solicitações</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <center>
    <?php
    $sql = "SELECT * FROM solicitacoes WHERE aprovado = 0";
    $sql = $pdo->query($sql);

    echo "LISTA DE SOLICITAÇÕES";

    if ($sql->rowCount() > 0) {
      echo "<table border='2' style='background-color:white;'>"; //abre table
      echo "<thead>"; //abre cabeçalho
      echo "<tr>"; //abre uma linha
      echo "<th>ID</th>"; // colunas do cabeçalho
      echo "<th>Nome</th>";
      echo "<th>Plano Antigo</th>";
      echo "<th>Plano Novo</th>";
      echo "<th>Número de Solicitação</th>";
      echo "</tr>"; //fecha linhas
      echo "</thead>"; //fecha cabeçalho
      echo "<tbody>"; //abre corpo da tabela
      /*Se você tiver um loop para exibir os dados ele deve ficar aqui*/
      foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $dado) {
        echo "<tr>"; // abre uma linha
        echo "<td style='margin: 0 auto;'>" . $dado['id']; //coluna numero
        echo "<td style='margin: 0 auto;'>" . $dado['nome'] . "</td>"; // coluna validade
        echo "<td style='margin: 0 auto;'>" . $dado['plano_antigo'] . "</td>"; //coluna anexo
        echo "<td style='margin: 0 auto;'>" . $dado['plano_novo'] . "</td>"; //coluna valor numero
        echo "<td style='margin: 0 auto;'>" . $dado['aprovado'] . "</td>";
        echo "<td><a href='./src/aprovar.php?id=".$dado['id'].'&planos='.$dado['plano_novo']."' name='update' id='update'>APROVAR</a><br><a href='./src/reprovar.php?id=".$dado['id']."'>REPROVAR</a></td>";  
        echo "</tr>"; // fecha linha
      }
      /*loop deve terminar aqui*/
      echo "</tbody>"; //fecha corpo
      echo "</table>"; //fecha tabela
    } else {
      echo "NENHUMA SOLICITAÇÃO ENCONTRADA";
    }

    ?>
  </center>

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

  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
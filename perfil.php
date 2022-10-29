<?php include('./src/protect.php'); ?> 
<?php require_once(__DIR__ . '/src/profile.php'); ?> 
<?php include("./config.php"); ?>
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

    <style>
        .btn-plano {
            margin: 20px;
        }
    </style>

</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #c3c3c3;">

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
                                    <?php if (isset($_SESSION['nome'])) echo $_SESSION['nome'];
                                    ?>
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
                            <a class="nav-link" href="./logado.php#sec-85ba">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./perfil.php#sec-6969">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./logado.php#carousel_28e0">Personals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="treinos.php">Treinos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./perfil.php">Perfil</a>
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

    <section class="mt-5 mb-5  d-flex justify-content-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1 class="d-flex justify-content-center">Perfil Do Usuario</h1>
                <div class="col-md-6 col-lg-5">
                    <div id="infoUpload">
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Profile
                        </div>
                        <div class="card-body">
                            <?php if ($genero == 'masculino') : ?>
                                <img src="./assets/images/manicon.png" class="card-img-top" id="profile_photo" alt="porfilePhoto" width="300px" height="300px">
                            <?php elseif ($genero == 'feminino') : ?>
                                <img src="./assets/images/womanicon.png" class="card-img-top" id="profile_photo" alt="porfilePhoto" width="300px" height="300px">
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
                        <div class="btn-plano">
                            <a href="./perfil.php#minhaDiv"><button class="btn btn-success w-100" onclick="Mudarestado('minhaDiv')">
                                    Mudar Plano
                                </button></a>
                        </div>
                        <div class="btn-plano">
                            <a onclick="Mudarestado('qrCode')"><button class="btn btn-success w-100" onclick="funcao1()">
                                    Pagar Mensalidade
                                </button></a>
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

    <?php if ($planos == 'trimestral') : ?>
        <div class="d-flex justify-content-center m-4">

            <div id="qrCode" class="card bg-dark text-light" style="width: 28rem;display:none;position:absolute;margin-top:-700px;">
                <div class="card-header bg-transparent border-success">
                    <div class="d-flex justify-content-center fw-bold">
                        Faça agora o pagamento por pix utilizando nosso QR Code
                    </div>
                    <div class="d-flex justify-content-end">
                        <button onclick="Mudarestado('qrCode')" type="button" class="btn btn-danger d-flex justify-content-end" style="position:absolute;margin-top:-89px;">X</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="./assets/images/qrcode180.png" style="width: 20rem;" class="card-img mt-4" alt="...">
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer border-success d-flex justify-content-center">
                    <strong>
                        <h5 class="card-title" style="margin-right: 7px;">Você irá Pagar Um Valor De </h5>
                    </strong>
                    <h5> $180,00 Reais</h5>
                </div>
            </div>

        </div>
    <? endif; ?>

    <?php if ($planos == 'intermediario') : ?>
        <div class="d-flex justify-content-center m-4">

            <div id="qrCode" class="card bg-dark text-light" style="width: 28rem;display:none;position:absolute;margin-top:-700px;">
                <div class="card-header bg-transparent border-success">
                    <div class="d-flex justify-content-center fw-bold">
                        Faça agora o pagamento por pix utilizando nosso QR Code
                    </div>
                    <div class="d-flex justify-content-end">
                        <button onclick="Mudarestado('qrCode')" type="button" class="btn btn-danger d-flex justify-content-end" style="position:absolute;margin-top:-89px;">X</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="./assets/images/qrcode70.png" style="width: 20rem;" class="card-img mt-4" alt="...">
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer border-success d-flex justify-content-center">
                    <strong>
                        <h5 class="card-title" style="margin-right: 7px;">Você irá Pagar Um Valor De </h5>
                    </strong>
                    <h5> $70,00 Reais</h5>
                </div>
            </div>

        </div>
    <? endif; ?>

    <?php if ($planos == 'semanal') : ?>
        <div class="d-flex justify-content-center m-4">

            <div id="qrCode" class="card bg-dark text-light" style="width: 28rem;display:none;position:absolute;margin-top:-700px;">
                <div class="card-header bg-transparent border-success">
                    <div class="d-flex justify-content-center fw-bold">
                        Faça agora o pagamento por pix utilizando nosso QR Code
                    </div>
                    <div class="d-flex justify-content-end">
                        <button onclick="Mudarestado('qrCode')" type="button" class="btn btn-danger d-flex justify-content-end" style="position:absolute;margin-top:-89px;">X</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="./assets/images/qrcode80.png" style="width: 20rem;" class="card-img mt-4" alt="...">
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer border-success d-flex justify-content-center">
                    <strong>
                        <h5 class="card-title" style="margin-right: 7px;">Você irá Pagar Um Valor De </h5>
                    </strong>
                    <h5> $80,00 Reais</h5>
                </div>
            </div>
        </div>
    <? endif; ?>


    <hr>
    <section>
        <div id="minhaDiv" class="container" style="display: none;">
            <div class="row mb-5">
                <div class="col-md-12">
                    <h1 class="d-flex justify-content-center">Planos</h1>
                </div>
            </div>
            <div class="row d-flex d-flex justify-content-around">

                <div class="col-md-3 mb-5" style="width: 22rem;">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">
                            <div class="d-flex justify-content-center fw-bold">
                                Plano Trimestral
                            </div>
                        </div>
                        <div class="card-body text-success" style="height: 120px;">
                            <h5 class="card-title">Preço</h5>
                            <p class="card-text">180,00 (Desconto de 25%)</p>
                        </div>
                        <div class="card-footer bg-transparent border-success">
                            <h5 class="card-title">Periodo</h5>
                            <p class="card-text">Segunda a sabado.</p>
                            <p class="card-text d-flex justify-content-center">
                                <?php

                                $sql = "SELECT * FROM clientes WHERE id ='" . $_SESSION['id'] . "'";
                                $sql = $pdo->query($sql);

                                $sql1 = "SELECT * FROM solicitacoes WHERE aprovado = 0 AND telefone ='" . $_SESSION['telefone'] . "'";
                                $sql1 = $pdo->query($sql1);

                                if ($sql1->rowCount() == 0) {
                                    if ($planos != 'trimestral') {
                                        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $dado) {

                                            echo "<a href='./src/planotri.php?nome=" . $dado['nome'] . '&planos=' . $dado['planos'] .  '&telefone=' . $dado['telefone'] . "' class='w-100'>
                                    <button class='btn btn-success w-100'>Adquirir</button>
                                    </a>";
                                        }
                                    } else {
                                        echo "<h5 class='card-title text-center'>Plano Atual</h5>";
                                    }
                                } ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-5" style="width: 22rem;" id="card-efect">
                    <div class="card border-info mb-3">
                        <div class="card-header bg-transparent border-info">
                            <div class="d-flex justify-content-center fw-bold">
                                Plano Intermediario
                            </div>
                        </div>
                        <div class="card-body text-info" style="height: 120px;">
                            <h5 class="card-title">Preço</h5>
                            <p class="card-text">70,00</p>
                        </div>
                        <div class="card-footer bg-transparent border-info">
                            <h5 class="card-title">Periodo</h5>
                            <p class="card-text">3 dias da semana a sua escolha.</p>
                            <p class="card-text d-flex justify-content-center">
                                <?php

                                $sql = "SELECT * FROM clientes WHERE id ='" . $_SESSION['id'] . "'";
                                $sql = $pdo->query($sql);

                                $sql1 = "SELECT * FROM solicitacoes WHERE aprovado = 0 AND telefone ='" . $_SESSION['telefone'] . "'";
                                $sql1 = $pdo->query($sql1);

                                if ($sql1->rowCount() == 0) {
                                    if ($planos != 'intermediario') {
                                        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $dado) {

                                            echo "<a href='./src/planoint.php?nome=" . $dado['nome'] . '&planos=' . $dado['planos'] .  '&telefone=' . $dado['telefone'] . "' class='w-100'>
                                    <button class='btn btn-success w-100'>Adquirir</button>
                                    </a>";
                                        }
                                    } else {
                                        echo "<h5 class='card-title text-center'>Plano Atual</h5>";
                                    }
                                } ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-5" style="width: 22rem;" id="card-efect">
                    <div class="card border-secondary mb-3">
                        <div class="card-header bg-transparent border-secondary">
                            <div class="d-flex justify-content-center fw-bold">
                                Plano Semanal
                            </div>
                        </div>
                        <div class="card-body text-secondary" style="height: 120px;">
                            <h5 class="card-title">Preço</h5>
                            <p class="card-text">80,00 (Desconto 50%)</p>
                        </div>
                        <div class="card-footer bg-transparent border-secondary">
                            <h5 class="card-title">Periodo</h5>
                            <p class="card-text">Segunda a Sabado.</p>
                            <p class="card-text d-flex justify-content-center">
                                <?php

                                $sql = "SELECT * FROM clientes WHERE id ='" . $_SESSION['id'] . "'";
                                $sql = $pdo->query($sql);

                                $sql1 = "SELECT * FROM solicitacoes WHERE aprovado = 0 AND telefone ='" . $_SESSION['telefone'] . "'";
                                $sql1 = $pdo->query($sql1);

                                if ($sql1->rowCount() == 0) {
                                    if ($planos != 'semanal') {
                                        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $dado) {

                                            echo "<a href='./src/planosem.php?nome=" . $dado['nome'] . '&planos=' . $dado['planos'] .  '&telefone=' . $dado['telefone'] . "' class='w-100'>
    <button class='btn btn-success w-100'>Adquirir</button>
    </a>";
                                        }
                                    } else {
                                        echo "<h5 class='card-title text-center'>Plano Atual</h5>";
                                    }
                                } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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

    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/photoUpload.js"></script>


</body>

</html>
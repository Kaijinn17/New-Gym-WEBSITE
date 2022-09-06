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

  <style>
  .card-text{
    font-family: monospace;
  }
  </style>

  
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Página Inicial">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="u-body u-xl-mode" style="background-color: darkgray;" data-lang="pt">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./perfil.php"><img src="./assets/images/akdemia3.png" alt="" width="158px" height="44.63px"></a>
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
            <li class="nav-item">
              <a class="nav-link" href="perfil.php">Perfil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="text-bg-light p-2 d-lg-flex justify-content-left" style="font-size: 18px;">
    <strong>Olá <?php if (isset($_SESSION['nome'])) echo $_SESSION['nome'];?> Continue Em Forma Com Treinos Em Casa</strong>
</div>
 
  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino1.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">1.Polichinelos</h5>
        <p class="card-text">Fique de pé, com a coluna reta. Abra as pernas e jogue os braços para o alto, encostando as mãos. Logo na sequência, feche as pernas, enquanto coloca os braços colados no corpo. Repita esses gestos rapidamente e sem parar por 30 segundos. Você precisa ficar ofegante, com o coração batendo mais rápido. Se estiver fácil, acelere e coloque caneleiras com peso. Evite fazer polichinelos de meias ou em uma superfície escorregadia para não tomar um tombo.</p>
        <p><strong>O que trabalha principalmente:</strong> capacidade cardiorrespiratória e coordenação</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino2.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">2.Cadeirinha na Parede</h5>
        <p class="card-text">É simples. Apoie as costas em uma parede firme e, então, dobre os joelhos até eles atingirem um ângulo de mais ou menos 90 graus. Com as costas coladas na parede, por 30 segundos. Você sentirá a coxa “queimar” um tanto. “Se ficar difícil, dá para dobrar um pouco menos os joelhos”, indica Lancha Junior. Já se mal estiver suando, segure ou abrace alguma coisa — idealmente, uma daquelas bolas mais pesadas típicas de academia.</p>
        <p><strong>O que trabalha principalmente:</strong> membros inferiores (quadríceps e glúteos)</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino3.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">3.Flexão de Braço</h5>
        <p class="card-text">Deitado de bruços, deixe as pernas esticadas e os pés juntos. Posicione as mãos espalmadas no solo. Elas precisam permanecer no eixo horizontal dos ombros, porém um pouco distantes do tronco para ativarem o peitoral. Se ficarem muito próximas do corpo, só os tríceps farão força. Sem dobrar as pernas, erga-se com os braços e flexione-os na sequência. Repita até o tempo acabar. Se precisar facilitar, ponha um dos joelhos no piso enquanto sobe e desce.</p>
        <p><strong>O que trabalha principalmente:</strong> peitoral, tríceps e ombros</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino4.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">4.Abdominal Supra no Solo</h5>
        <p class="card-text">Agora é hora de deitar de barriga para cima com os joelhos flexionados e os pés no chão. Contraia o abdômen enquanto ergue um pouco o tronco e a cabeça. Atenção: não entorte demais o pescoço. As mãos podem dar suporte à nuca ou ficar ao lado do corpo. Para elevar a dificuldade, suba bastante o tronco, quase colando o umbigo nas pernas. Ainda está moleza? Experimente segurar algum item pesado acima da cabeça enquanto executa os abdominais.</p>
        <p><strong>O que trabalha principalmente:</strong> músculos do abdômen</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino8.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">5.Subir e Descer na Cadeira</h5>
        <p>O nome já entrega: basta repetir esse gesto, revezando as pernas. Contudo, certifique-se de que o móvel aguenta o tranco e está firmado no chão. Quanto mais alto o banco, maior a dificuldade. “O exercício em si é ótimo. Mas há um risco de quedas, principalmente”, pondera Martins. Se estiver inseguro ou não conseguir realizar o movimento, uma opção é usar a mesma cadeira para se sentar e levantar por 30 segundos, sem o auxílio dos braços.</p>
        <p><strong>O que trabalha principalmente:</strong> quadríceps, glúteos e estabilizadores da coluna</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino5.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">6.Agachamento Tradicional</h5>
        <p>Comece com os pés na linha dos ombros. O passo seguinte é jogar as nádegas para trás, sem tirar o calcanhar do solo. Agache até o joelho formar um ângulo de 90 graus e deixe o corpo ereto de novo. Repita o movimento por 30 segundos. Para tornar o gesto mais natural, os braços podem ir para a frente toda vez que empurrar o bumbum para trás. A coluna deve ficar ereta. Se quiser aumentar o desafio, acelere (sem descuidar do movimento em si).</p>
        <p><strong>O que trabalha principalmente:</strong> quadríceps, glúteos e estabilizadores da coluna</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino6.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">7.Triceps Mergulho</h5>
        <p>Antes de tudo, encontre um apoio firme — um sofá com estofado mais duro, por exemplo. Aí, vire de costas para ele, como se fosse sentar. Segure a extremidade do móvel com as mãos e, mantendo as pernas retas, deixe o corpo descer devagar para erguê-lo na sequência com a força dos braços. E, como de costume, repita por 30 segundos. Complicou? Dobre os joelhos para que as pernas ajudem a musculatura do tríceps. Caso sinta dores nos ombros, converse com um profissional.</p>
        <p><strong>O que trabalha principalmente:</strong> tríceps</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/treino7.jpg" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">8.Prancha Vertical</h5>
        <p>Deitado, sustente o corpo com os antebraços e os pés, sem dobrar a coluna ou as pernas. Contraia glúteos e abdômen e segure a pose até passar meio minuto. Quem sofrer demais pode apoiar um joelho no chão ou até abreviar o tempo. Na contramão, deixe o cronômetro avançar para fortificar mais a musculatura do core. Há gente bem condicionada que mantém a prancha com um só antebraço no chão. Se estiver confiante, experimente — mas pare ao menor sinal de dores nas costas.</p>
        <p><strong>O que trabalha principalmente:</strong> core (musculatura da região central do corpo)</p>
      </div>
    </div>
  </div>
</div>
  </div>

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

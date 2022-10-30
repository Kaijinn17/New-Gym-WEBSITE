<?php include('./src/protect.php'); ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Treinos</title>
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

<body class="u-body u-xl-mode" style="background-color: black;" data-lang="pt">
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
  
  <div style="background-color:white; width:100%;" class="d-flex justify-content-center p-3">
  <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Escolher Tipo De Treino
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" onclick="Calistenia('divCalist')">Calistenia</a></li>
    <li><a class="dropdown-item" onclick="Academia('divAcad')">Academia</a></li>
  </ul>
</div>
</div>

  <div id="divCalist" class="justify-content-center" style="display: none;">
  <div class="text-bg-light p-2 d-lg-flex justify-content-center" style="font-size: 18px;">
    <strong>Olá <span style="color: red;"><?php if (isset($_SESSION['nome'])) echo $_SESSION['nome'];?></span>, Continue Em Forma Com Treinos Em Casa</strong>
</div>
 
 <div class="justify-content-center m-4">
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
 </div>
  </div>

  <div id="divAcad" class="justify-content-center" style="display: none;">
  <div class="text-bg-light p-2 d-lg-flex justify-content-center" style="font-size: 18px;">
    <strong>Olá <span style="color: red;"><?php if (isset($_SESSION['nome'])) echo $_SESSION['nome'];?></span>, Faça esses Treinos se não houver Professores disponiveis</strong>
</div>
 
 <div class="justify-content-center m-4">
  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/biceps.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">1.Rosca Direta</h5>
        <p class="card-text">Para começar, fique em pé e pegue um halter com cada mão. Os cotovelos devem estar próximos ao tronco e as palmas das mãos direcionadas para a frente;
Então, com os antebraços imóveis, solte o ar e levante os pesos ao mesmo tempo em que contrai os bíceps. Isso deve ser feito até que os bíceps estejam completamente contraídos e os halteres se encontrem na altura dos ombros;
Em seguida, permaneça na posição contraída por um instante;
Depois, inspire o ar e retorne lentamente ao posicionamento original. </p>
        <p><strong>O que trabalha principalmente:</strong> Biceps</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/triceps.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">2.Tríceps na polia alta com corda</h5>
        <p class="card-text">Prenda uma corda a uma polia alta no equipamento de cabo e segure-a com uma pegada neutra, ou seja, as palmas das mãos devem ficar voltadas uma para a outra.
Fique em pé, com o tronco reto e uma ligeiramente inclinado para frente. Os antebraços devem estar próximos ao corpo e perpendiculares ao chão.
Então, use o tríceps para abaixar a corda, levando cada lado do acessório até as coxas, ao mesmo tempo em que exala o ar. Na parte final do movimento, os braços deverão estar totalmente estendidos e quase perpendiculares ao chão.
Segure a posição contraída durante um segundo e lentamente erga a corda, retornando ao posicionamento original, ao mesmo tempo em que exala o ar.</p>
        <p><strong>O que trabalha principalmente:</strong> Triceps</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/costas.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">3.Remada unilateral com halter</h5>
        <p class="card-text">Para começar, coloque um halter em cada lado de um banco reto.
Em seguida, coloque as pernas em cima do banco, encostando o joelho e incline tronco para a frente até a parte superior do corpo ficar paralela ao chão.
Depois, coloque uma das mãos no banco (a que for correspondente a perna que está no banco) para obter suporte e pegue um halter com a outra mão. Mantenha a região lombar reta e a palma da mão voltada para o tronco.
Então, leve o peso para cima, até a lateral do peito. Flexione o cotovelo e mantenha o tronco imóvel.
Durante esse movimento, solte o ar e contraia bem os músculos das costas. Você deve se certificar de que está fazendo força com os músculos das costas e não com o braço. Além disso, os antebraços não devem fazer nenhum esforço, a não ser o de segurar o halter.
Depois, desça o halter e volte à posição inicial, ao mesmo tempo em que inala o ar. Após atingir o número determinado de repetições, troque a posição dos braços.</p>
        <p><strong>O que trabalha principalmente:</strong> Região média das costas, o latíssimo do dorso, os bíceps e os ombros.</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/ombro.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">4.Elevação lateral de ombros com halteres</h5>
        <p class="card-text">Para começar, fique em pé e posicione os seus pés paralelos aos ombros. Segure um halter em cada mão com as palmas voltadas para você. Não se esqueça de manter a coluna reta e as escápulas encaixadas para trás.;
Em seguida, coloque os pesos próximos, na altura das coxas e deixe os cotovelos levemente flexionados;
Depois, eleve os halteres lateralmente, fazendo o movimento de abdução dos ombros (em que os braços são levantados para fora e para o lado), até os braços ficarem paralelos ao chão. O esforço do movimento deve ser concentrado na parte lateral dos deltoides, na articulação dos ombros, portanto, os cotovelos devem permanecer imóveis;
Então, contraia bem os músculos e desça lentamente os halteres e volte à posição original.</p>
        <p><strong>O que trabalha principalmente:</strong> Deltoide lateral, mas o exercício ainda aciona, de modo secundário, o deltoide anterior e o deltoide posterior.</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/peito.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">5.Supino reto com halteres</h5>
        <p>Sentar em um banco reto com um halter em cada uma das coxas. Com o auxílio das pernas, subir os pesos ao mesmo tempo em que deita o corpo para trás, firmando bem as costas e os glúteos no banco.

Com os cotovelos estendidos, segurar um halter deitado em cada mão. A pegada deve ser com os polegares voltados para o lado de dentro. Um deve estar próximo ao outro, com ambos na altura do peito.

Descer os halteres de modo controlado, fazendo o movimento de flexão dos cotovelos até que as cargas alcancem a altura do peito. Durante a execução desta parte, alongar bem os músculos do peitoral.Empurrar os pesos para cima, deixando um halter bem próximo ao outro, até os cotovelos se estenderem. A força deve estar concentrada nos músculos do peitoral. Somente os braços devem subir, os ombros devem ser mantidos encaixados para trás.</p>
        <p><strong>O que trabalha principalmente:</strong> Peito</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/pernas.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">6.Leg press</h5>
        <p>Comece sentado no aparelho e com os pés no centro da plataforma e paralelos aos ombros, eles ainda devem apontar ligeiramente para fora, acompanhando o alinhamento dos joelhos;
Em seguida, estenda os joelhos, empurrando a plataforma para frente, e destrave o peso. Segure as alças do aparelho para auxiliar a estabilização. Deixe as costas e a lombar fixadas no banco;
Então, desça o peso cuidadosamente, flexionando os joelhos em aproximadamente 90º. Tome cuidado para não descer demais e travar os joelhos;
Empurre a plataforma para frente com a força das coxas até estender os joelhos. Segure a contração do músculo durante um momento e repita o exercício quantas vezes for determinado;
Ao término do exercício, trave os pesos e saia do equipamento com cuidado.</p>
        <p><strong>O que trabalha principalmente:</strong> Fortalece a panturrilha, o quadríceps (parte da frente das coxas), os glúteos e os isquiotibiais (posteriores das coxas).</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/panturrilha.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">7.Elevação de panturrilha com barra</h5>
        <p>Para começar, fique em pé, com os pés paralelos aos ombros. Pegue uma barra e coloque-a na parte superior das costas, como a imagem acima mostra. Segure a barra com uma pegada pronada, ou seja, com as palmas das mãos direcionadas para o lado de fora.
Enquanto segura a barra, pressione-a para baixo e contraia as escápulas dos ombros, para ter estabilidade;
Então, pressione as pontas dos pés para levantar os calcanhares do chão, como exibido na figura acima;
Em seguida, retorne à posição original.</p>
        <p><strong>O que trabalha principalmente:</strong> Panturrilha</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="cards d-flex justify-content-center m-4">
  <div class="card mb-3 row" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./assets/images/abdomen.gif" style="height: 100%;"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">8.Abdominal giro russo com peso</h5>
        <p>deite-se de costas no chão ou em uma esteira de exercícios com as pernas completamente estendidas e a parte superior do corpo na posição vertical. Segure uma anilha pelos lados com as duas mãos posicionando-a em frente aos músculos abdominais, com os braços ligeiramente flexionados. Se preferir, esse exercício pode ser feito apenas com o peso do próprio corpo, sem a utilização da anilha.

Dobre ligeiramente os joelhos e erga as pernas e os pés, deixando apenas o bumbum no solo, como na primeira imagem. Incline a parte superior do corpo um pouco para trás como forma de ajudar a manter o equilíbrio ao longo do exercício.

A partir daí, leve a anilha para o lado esquerdo até tocar o peso no chão, ao mesmo tempo em que exala o ar. Em seguida volte à posição inicial, inalando o ar e repita o movimento no lado direito. </p>
        <p><strong>Obs:</strong> A movimentação durante o exercício deve ser devagar e controlada. Fazer movimentos bruscos pode causar lesões nas costas.</p>
        <p><strong>O que trabalha principalmente:</strong> a força dos músculos abdominais.</p>
      </div>
    </div>
  </div>
</div>
  </div>
 </div>
  </div>

  <footer id="foot" style="background-color:gray; position:absolute;bottom:0; width:100%; text-align:center;" class="footer" id="sec-6969">
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
  <script src="./assets/js/jsmain.js"></script>

</body>

</html>

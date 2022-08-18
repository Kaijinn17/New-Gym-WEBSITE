<?php 

require_once 'config.php'; 

if (!empty($_POST)) {
    // Está chegando dados por POST e então posso tentar inserir no banco
    // Obter as informações do formulário ($_POST)
    try {
      // Preparar as informações
        // Montar a SQL (pgsql)
        $sql = "INSERT INTO users
                  (nome, data_nascimento, telefone, email, senha)
                VALUES
                  (:nome, :dataNascimento, :telefone, :email, :senha)";
  
        // Preparar a SQL (pdo)
        $stmt = $pdo->prepare($sql);
  
        // Definir/organizar os dados p/ SQL
        $dados = array(
          ':nome' => $_POST['nome'],
          ':dataNascimento' => $_POST['dataNascimento'],
          ':telefone' => $_POST['telefone'],
          ':email' => $_POST['email'],
          ':senha' => md5($_POST['senha'])
        );
  
        // Tentar Executar a SQL (INSERT)
        // Realizar a inserção das informações no BD (com o PHP)
        if ($stmt->execute($dados)) {
          header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
        }
    } catch (PDOException $e) {
        //die($e->getMessage());
        header("Location: index.php?msgErro=Falha ao cadastrar...");
    }
  }
  else {
    header("Location: index.php?msgErro=Erro de acesso.");
  }
  die();

?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/akdemia2.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Página-Inicial.php" data-home-page-title="Página Inicial" class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-header" id="sec-cf8d"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="2581" data-image-height="729">
          <img src="images/akdemia2.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Página-Inicial.html#carousel_6c19" data-page-id="958515637" style="padding: 24px 20px;">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 24px 20px;">Perfil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 24px 20px;">Contato</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 24px 20px;">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Página-Inicial.html#carousel_28e0" data-page-id="958515637" style="padding: 24px 20px;">Personals</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Página-Inicial.html#carousel_6c19" data-page-id="958515637">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Perfil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Contato</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Página-Inicial.html#carousel_28e0" data-page-id="958515637">Personals</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_6c19" data-image-width="1280" data-image-height="720">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-default u-text-1">AK<br>
        </h2>
        <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-2">DEMIA</h2>
        <p class="u-text u-text-default u-text-white u-text-3">Somos a Academia Que Vai Revolucionar a Estética!!</p>
        <a href="cadastrar.php" data-page-id="13566755" class="u-active-custom-color-2 u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-2 u-radius-50 u-btn-1">criar conta</a>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="carousel_28e0">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Nossos professores</h3>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img src="images/man-holding-barbell-1431282.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="810" data-image-height="1080">
                <h5 class="u-text u-text-2">CarLOS ANSELMO</h5>
                <p class="u-text u-text-grey-40 u-text-3">Criador dos Designs Visuais do site e Personal Trainer</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img src="images/athlete-black-and-white-boxer-boxing-290416.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-2">
                <h5 class="u-text u-text-4">vULGO LIDER DA SALA</h5>
                <p class="u-text u-text-grey-40 u-text-5">Gerente do nosso banco de Dados e Preparador Físico de Atletas do Basquete.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-image u-section-3" id="carousel_271a" data-image-width="2258" data-image-height="1500">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-text u-text-body-alt-color u-text-default u-text-1">mantenha o foco!</h4><span class="u-icon u-icon-circle u-opacity u-opacity-45 u-text-palette-5-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 409.294 409.294" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b4a9"></use></svg><svg class="u-svg-content" viewBox="0 0 409.294 409.294" id="svg-b4a9"><path d="m233.882 29.235v175.412h116.941c0 64.48-52.461 116.941-116.941 116.941v58.471c96.728 0 175.412-78.684 175.412-175.412v-175.412z"></path><path d="m0 204.647h116.941c0 64.48-52.461 116.941-116.941 116.941v58.471c96.728 0 175.412-78.684 175.412-175.412v-175.412h-175.412z"></path></svg></span>
        <h2 class="u-text u-text-body-alt-color u-text-2"> Quem tem um objetivo, não tem desculpas. Foque e treine com determinação,Não tenha medo de falhar. Esse é o caminho para o sucesso, Se não conseguiu fazer o exercício hoje, tente de novo amanhã. A prática é que vai te deixar melhor. Não desista!</h2>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-white u-section-4" id="carousel_0d0f">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <div class="u-align-left u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-text u-text-1">DEixe uma mensagem</h2>
            <p class="u-text u-text-2">É muito importante pra nós sabermos oque você está achando do nosso serviço.</p>
          </div>
        </div>
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
            <div class="u-form-email u-form-group u-form-partition-factor-2">
              <label for="email-f2a8" class="u-label u-text-grey-40">E-mail</label>
              <input type="email" placeholder="Enter a valid email address" id="email-f2a8" name="email" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2">
              <label for="name-f2a8" class="u-label u-text-grey-40">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-f2a8" name="name" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-3">
              <label for="date-4441" class="u-label u-text-grey-40">Date</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-4441" name="date" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-4">
              <label for="phone-447e" class="u-label u-text-grey-40">Phone</label>
              <input type="tel" pattern="\+?\d{0,2}[\s\(\-]?([0-9]{3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-447e" name="phone" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-message u-form-group-5">
              <label for="message-f2a8" class="u-label u-text-grey-40">Message</label>
              <textarea placeholder="Enter your message" rows="4" cols="50" id="message-f2a8" name="message" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required=""></textarea>
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <a href="#" class="u-border-2 u-border-white u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-1">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <a href="https://nicepage.com/k/infographic-html-templates" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-hover-white u-btn-2">Enviar<br>
        </a>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-5" id="sec-85ba">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-oswald u-text u-text-custom-color-1 u-text-default u-title u-text-1">Entre Em Contato Com a Gente </h1>
        <div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-size-13 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-xl u-container-layout-1">
                  <div alt="" class="u-align-left u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-circle u-image-1" src="" data-image-width="1280" data-image-height="1280"></div>
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-47 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <a href="https://nicepage.com/pt/modelos-site" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+1 (234) 567-8910
                  </a>
                  <img class="u-image u-image-default u-preserve-proportions u-image-2" src="images/48d3c3d305db88bcb361f470239b2cfc45048738dee1964d2376416d6c94d51073b09b9658aae1e18c2f8db1ba2dd47dca43477beb44691f23b499_1280.png" alt="" data-image-width="150" data-image-height="150">
                  <h2 class="u-custom-font u-font-oswald u-subtitle u-text u-text-default u-text-2">akdemia@gmail.com</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-13b5"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Este site é apenas um projeto de estudantes do 3 Ano do Ensino Médio, Nada aqui deve ser realmente levado a sério.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>
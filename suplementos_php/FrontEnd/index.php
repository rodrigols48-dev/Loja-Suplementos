<?php 
require_once('../BackEnd/Cliente/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEASEA Suplementos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="shortcut icon" type="imagex/png" href="img/CEASEA LOGO.ico">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

      <a class="navbar-brand" href="#">CEASEA Suplementos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#about">Sobre Nós</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">Contato</a>
          </li>

          <li class="nav-item" id="person">
            <a href="login/login.php" target="_blank" id="login"> <i class="bi bi-person-circle text-light"></i>
              Login</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron" style="background-image: url(img/ceasea_logo.jpg);">
    <h1 class="display-4 titulo0">CEASEA</h1>
    <p class="lead titulo1">Potencialize seus treinos, otimize seus resultados.</p>

  </div>

  <!-- SERVICES -->

  <section class="services">
    <div class="services-content container">
      <h2>Menu</h2>
    </div>

    <section class="haircuts">

      <div class="haircut" data-aos="fade-up" data-aos-delay="150">
        <img src="img/creatine1.png" alt="Creatina" />
        <div class="haircut-info">
          <strong>Creatina 100% 1kg</strong>
         <button class="btn" data-toggle="modal" data-target=".bd-example-modal-xl"> R$ 220,00</button>

        </div>

      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="250">
        <img src="img/protein2.png" alt="whey" />
        <div class="haircut-info">
          <strong>Multivitaminico 30 Comp</strong>
          <button class="btn" data-toggle="modal" data-target=".bd-example-modal-xl">R$ 75,00</button>
        </div>
      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="400">
        <img src="img/whey1.png" alt="whey" />
        <div class="haircut-info">
          <strong>Whey Protein Isolado 1kg</strong>
          <button class="btn" data-toggle="modal" data-target=".bd-example-modal-xl">R$ 150,00</button>
        </div>
      </div>

    </section>
    <section class="haircuts">

      <div class="haircut" data-aos="fade-up" data-aos-delay="400">
        <img src="img/whey2.png" alt="whey" />
        <div class="haircut-info">
          <strong>Whey Protein Isolado 1kg</strong>
         <button class="btn" data-toggle="modal" data-target=".bd-example-modal-xl">R$ 150,00</button>
        </div>
      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="400">
        <img src="img/protein1.png" alt="proteina" />
        <div class="haircut-info">
          <strong>Whey Protein em Comprimidos</strong>
          <button class="btn" data-toggle="modal" data-target=".bd-example-modal-xl"> R$ 80,00</button>
        </div>
      </div>

      <div class="haircut" data-aos="fade-up" data-aos-delay="400">
        <img src="img/protein4.png" alt="vitamina" />
        <div class="haircut-info">
          <strong>Vitamina C 30 Comprimidos</strong>
          <button class="btn" data-toggle="modal" data-target=".bd-example-modal-xl">R$ 80,00</button>
        </div>
      </div>

    </section>

  </section>

  <hr style="border-top-width: 1px; border-top-color: black;" />
  <footer class="container py-5 footer">

    <div class="row">

      <div id="about" class="col-12 col-md">
        <h2>Sobre Nós</h2>

        <p>Somos mais que uma loja, somos a sua fonte confiável de excelência em suplementos. Comprometidos
          com
          a
          sua jornada fitness, oferecemos qualidade, variedade e expertise para impulsionar os seus
          objetivos.
          Bem-vindo à nossa comunidade, onde a sua saúde e desempenho são a nossa prioridade.</p>

      </div>

    </div>  

  <!-- Button Whatsapp -->

  <a href="https://api.whatsapp.com/send?phone=5511000000000&text=Quero%20fazer%20um%20agendamento%20hoje!" class="btn-whatsapp" target="_blank" data-aos="zoom-in-up" data-aos-delay="400">
    <img src="img/whatssapp.svg" alt="Botao whatsapp" />
    <span class="tooltip-text">Entre em Contato</span>
  </a>

  <!-- footer -->

  <div class="services">
    <h2>Venha conhecer</h2>
  </div>

  <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.199054563331!2d-38.57978912053656!3d-3.7668161335661607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1700102612007!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="footer-icons">

      <a href="https://www.instagram.com/estaciocampusparangaba/?utm_source=ig_web_button_share_sheet&igshid=YzAwZjE1ZTI0Zg==" target="_blank">
        <i class="fa-brands fa-instagram fa-2x"></i>

      </a>
      <a href="https://www.facebook.com/estacioparangaba/?locale=pt_BR" target="_blank">
        <i class="fa-brands fa-facebook fa-2x"></i>
      </a>
      <a href="https://www.tiktok.com/@camilelimaa_" target="_blank">
        <i class="fa-brands fa-tiktok fa-2x"></i>
      </a>
    </div>

    <div>
      <img src="img/logopng.png" alt="Logo" />
    </div>

    <p>Copyright 2023 | CEASEA - Todos direitos reservados.</p>
    
  </footer>

  <script src="js/main.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/scricpt.js"></script>

  <?php
  require_once("modal/carrinho.php");
  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>SISMECOM - Seu site de consultas e exames médicos</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Garante que o corpo ocupa pelo menos 100% da altura da visualização */
    }

    main {
      flex: 1; /* Faz com que o conteúdo principal (main) ocupe o restante da altura disponível */
    }

    footer.page-footer {
      margin-top: auto; /* Empurra o rodapé para a parte inferior do contêiner pai */
    }
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +55 (27) 94455 6789</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> atendimento@sismecom.com.br</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span class="text-primary">Sis</span>Mecom</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="saibamais.html">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="especialistas.html">Especialistas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Notícias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Fale Connosco</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

 <!-- Adicione os campos de email, senha e botão de enviar aqui -->
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post" action="connect.php">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="numeroMatricula" placeholder="Digite seu número de matrícula">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-success" style="background-color: #28a745;">Enviar</button>
      </form>

      <!-- Frase abaixo do botão "Login" -->
      <p class="mt-3">É o seu primeiro acesso? Contate o suporte para criar seu login e senha.</p>
      <p class="mt-3">Esqueceu sua senha? <a class="text-info"> Redefina aqui</a></p>
      <a type="button" class="btn btn-info" href="register.html" style="background-color: blue">Inscreva-se</a>
    </div>
  </div>
</div>

  </div>

  <div class="mt-4"></div>
  <div class="mb-4"></div>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
      <p id="copyright">Copyright &copy; 2023 <a href="https://ficticio.com/" target="_blank">Desenvolvido por Ficticio</a>. Todos os Direitos Reservados</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script>
  // Função para gerar número de matrícula aleatório
  function generateRandomMatricula() {
    // Ajuste o intervalo de números aleatórios conforme necessário
    return Math.floor(Math.random() * (9999999 - 1000000 + 1)) + 1000000;
  }

  // Atribui o número de matrícula gerado ao campo de entrada
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('numeroMatricula').value = generateRandomMatricula();
  });
</script>
  
</body>
</html>
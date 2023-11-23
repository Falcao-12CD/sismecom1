<!DOCTYPE html>
<html lang="pt-br">
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

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form id="registrationForm" action="login.php?acao=inserir" method="post" target="_blank" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nomeCompleto">Nome Completo:</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="data_nascimento">Data de Nascimento:</label>
              <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required="required">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="profissao">Tipo de Usuário:</label>
              <select class="form-control" id="profissao" name="profissao" required="required">
                <option value="">Selecione uma profissão</option>
                <option value="medico">Médico</option>
                <option value="recepcionista">Recepcionista</option>
                <option value="laboratorio">Laboratório</option>
                <option value="paciente">Paciente</option>
              </select>
            </div>
            <div class="form-group col-md-6" id="especialidadesGroup" style="display: none;">
              <label for="especialidades">Especialidades:</label>
              <select class="form-control" id="especialidades" name="especialidades">
                <option value="">Selecione uma especialidade</option>
                <option value="Acupuntura">Acupuntura</option>
                <option value="Alergia e imunologia">Alergia e imunologia</option>
                <option value="Anestesiologia">Anestesiologia</option>
                <option value="Angiologia">Angiologia</option>
                <option value="Cardiologia">Cardiologia</option>
                <option value="Clínica médica">Clínica médica</option>
                <option value="Coloproctologia">Coloproctologia</option>
                <option value="Dermatologia">Dermatologia</option>
                <option value="Endocrinologia">Endocrinologia</option>
                <option value="Endoscopia">Endoscopia</option>
                <option value="Gastroenterologia">Gastroenterologia</option>
                <option value="Geriatria">Geriatria</option>
                <option value="Ginecologia e obstetrícia">Ginecologia e obstetrícia</option>
                <option value="Hematologia e hemoterapia">Hematologia e hemoterapia</option>
                <option value="Homeopatia">Homeopatia</option>
                <option value="Infectologia">Infectologia</option>
                <option value="Mastologia">Mastologia</option>
                <option value="Nefrologia">Nefrologia</option>
                <option value="Neurologia">Neurologia</option>
                <option value="Nutrologia">Nutrologia</option>
                <option value="Oftalmologia">Oftalmologia</option>
                <option value="Oncologia">Oncologia</option>
                <option value="Ortopedia e traumatologia">Ortopedia e traumatologia</option>
                <option value="Otorrinolaringologia">Otorrinolaringologia</option>
                <option value="Patologia">Patologia</option>
                <option value="Pediatria">Pediatria</option>
                <option value="Pneumologia">Pneumologia</option>
                <option value="Psiquiatria">Psiquiatria</option>
                <option value="Radiologia">Radiologia</option>
                <option value="Radioterapia">Radioterapia</option>
                <option value="Reumatologia">Reumatologia</option>
                <option value="Urologia">Urologia</option>
                <option value="Outros">Outros</option>
              </select>
            </div>
          </div>

          <div class="form-group" id="crmGroup" style="display: none;">
            <label for="crm">Número de CRM:</label>
            <input type="text" class="form-control" id="cod_crm" name="cod_crm" placeholder="Número de CRM">
          </div>

          <div class="form-group">
            <label for="genero">Gênero:</label>
            <select class="form-control" id="genero" name="genero" required="required">
              <option value="">Selecione o gênero</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
              <option value="outro">Outro</option>
            </select>
          </div>

          <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required="required">
            <small>Formato: 123.456.789-01</small>
          </div>

          <!-- Adicione outros campos do formulário aqui -->

           <div class="form-group">
            <label for="cep">CEP:</label>
            <div class="input-group">
              <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP" required="required">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="btnBuscarCep">Buscar</button>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="logradouro">Logradouro:</label>
              <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Digite seu logradouro" required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="numero">Número:</label>
              <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
            </div>
          </div>


          <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite seu bairro" required="required">
          </div>

          <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade" required="required">
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="uf">UF:</label>
              <input type="text" class="form-control" id="uf" name="uf" placeholder="Digite seu UF" required="required">
            </div>
            <div class="form-group col-md-6">
              <label for="pais">País:</label>
               <input type="text" class="form-control" id="pais" name="pais" value="Brasil" readonly>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="telefone">Telefone:</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone" required="required">
            </div>
          </div>

          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required="required">
          </div>

          <div class="form-group">
            <label for="numeroMatricula">Número de Matrícula:</label>
            <input type="text" class="form-control" id="num_matricula" name="num_matricula" placeholder="Número de Matrícula" required="required">
          </div>

          <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required="required">
          </div>

          <div class="form-group">
            <label for="confirmarSenha">Digite novamente a senha:</label>
            <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" placeholder="Digite novamente a senha" required="required">
          </div>

          <button type="submit" class="btn btn-success" style="background-color: #28a745;" onclick="echoTeste()">Cadastrar</button>
        </form>
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

  <script>
    $(document).ready(function() {
      // Formatação automática do CPF
      $('#cpf').on('input', function() {
        let cpf = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos
        if (cpf.length === 11) {
          cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
          $(this).val(cpf);
        }
      });

      // Formatação automática do CEP
      $('#cep').on('input', function() {
        let cep = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos
        if (cep.length === 8) {
          cep = cep.replace(/(\d{5})(\d{3})/, '$1-$2');
          $(this).val(cep);
        }
      });
    });
    $(document).ready(function(){
      $("#profissao").change(function(){
        if ($(this).val() === "medico") {
          $("#especialidadesGroup").show();
          $("#crmGroup").show();
          generateRandomMatricula();
        } else {
          $("#especialidadesGroup").hide();
          $("#crmGroup").hide();
          generateRandomMatricula();
        }
      });
    });

     // Função para gerar número de matrícula aleatório
    function generateRandomMatricula() {
      var matricula = Math.floor(Math.random() * 9000000) + 1000000;
      $("#numeroMatricula").val(matricula);
    }

    // Evento de clique no botão de busca de CEP
    $("#btnBuscarCep").click(function() {
      buscarCep();
    });

    // Função para buscar informações do CEP na API ViaCEP
    function buscarCep() {
      var cep = $("#cep").val().replace(/\D/g, ''); // Remove caracteres não numéricos

      // Verifica se o CEP possui a quantidade correta de dígitos
      if (cep.length === 8) {
        $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function(data) {
          if (!data.erro) {
            // Preenche os campos do formulário com os dados do ViaCEP
            $("#logradouro").val(data.logradouro);
            $("#bairro").val(data.bairro);
            $("#cidade").val(data.localidade);
            $("#uf").val(data.uf);

          } else {
            alert("CEP não encontrado. Por favor, verifique o CEP informado.");
          }
        });
      } else {
        alert("Formato de CEP inválido. Por favor, insira um CEP válido.");
      }
    };

    function echoTeste(){
      console.log('Teste')
    }

  </script>
  
</body>
</html>

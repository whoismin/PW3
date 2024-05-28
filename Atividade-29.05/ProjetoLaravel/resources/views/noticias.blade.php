<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noticias</title>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #FFFCF0">
  <nav class="navbar navbar-expand-lg fw-semibold p-3" id="headerNav" style="background-color:#FFDE59">
      <div class="container-fluid">
        <a class="navbar-brand d-block d-lg-none" href="#">
          <img src="/static_files/images/logos/logo_2_white.png" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="quemsomos">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Noticias</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2" href="#">
              <img src="{{ asset('images/logo-etec.png') }}" alt="Bootstrap" width="70" height="50">              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="contato">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Vestibulinho</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nosso Cursos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Desenvolvimento de Sistemas</a></li>
                <li><a class="dropdown-item" href="#">Logistica</a></li>
                <li><a class="dropdown-item" href="#">Administração</a></li>
                <li><a class="dropdown-item" href="#">Contabilidade</a></li>
                <li><a class="dropdown-item" href="#">Recursos Humanos</a></li>
                <li><a class="dropdown-item" href="#">Srviços Juridicos</a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container">
<img src="{{ asset('images/noticias.png') }}" class="img-fluid">
<div class="container">
    <br>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
    <img src="{{ asset('images/Noticias1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Alunos do CPS cursam os Ensinos Médio, Técnico e Superior em cinco anos</h5>
        <p class="card-text">Etec da Zona Leste foi uma das primeiras unidades que recebeu a modalidade presente hoje em 30 Etecs e 29 Fatecs</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="{{ asset('images/noticias2.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Feira Tecnológica nesta sexta e sábado</h5>
        <p class="card-text">Programação conta com mostra de projetos e estandes de empresas; visitantes também poderão conhecer detalhes sobre processos seletivos das Etecs e Fatecs</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="{{ asset('images/noticias3.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Convocados recebem resultado das matrículas da primeira lista do Vestibulinho</h5>
        <p class="card-text">Escolas Técnicas Estaduais (Etecs) vão enviar até as 12 horas o aviso de deferimento ou indeferimento da matrícula por e-mail</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="{{ asset('images/noticias4.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">É tempo de preparar os documentos para a matrícula das Etecs do CPS</h5>
        <p class="card-text">Classificação geral do Vestibulinho das Etecs será divulgada em 6 de julho pela internet.</p>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
  </div>
  <footer style="background-color: #FFFCF0" class="text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(242, 212, 90);">
    © 2024 Etec Zona Leste:

  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   
    
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
              <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="quemsomos">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="noticias">Noticias</a>
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
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="{{ asset('images/Home2.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" >
      
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="{{ asset('images/Home4.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('images/Home3.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
<p style="color: #DA0404"class="fw-bold fs-1 text-center">Cursos disponíveis</p>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
  <div class="card border-warning mb-3" style="max-width: 18rem;">
  <img src="{{ asset('images/DS.jpeg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Desenvolvimento de Sistemas</h5>
    <p class="card-text">O aluno ingressa no Ensino Médio com Habilitação Profissional de Técnico no curso de Desenvolvimento de Sistemas</p>
  </div>
    </div>
  </div>
  <div class="col">
  <div class="card border-warning mb-3" style="max-width: 18rem;">
  <img src="{{ asset('images/Log.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Logistíca</h5>
    <p class="card-text">O aluno aprenderá sobre os processos de compra de matérias-primas, escolha dos fornecedores, cargas e os produtos em estoque</p>
  </div>
    </div>
  </div>
  <div class="col">
  <div class="card border-warning mb-3" style="max-width: 18rem;">
   <img src="{{ asset('images/adm.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Administração</h5>
    <p class="card-text">O aluno vai aprender ainda a analisar as chances de um negócio ou produto ser bem-sucedido e o comportamento do consumidor</p>
  </div>
    </div>
  </div>
  <div class="col">
  <div class="card border-warning mb-3" style="max-width: 18rem;">
  <img src="{{ asset('images/cont.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Contabilidade</h5>
    <p class="card-text">o estudante aprenderá matemática financeira, utilizada para operações de financiamento e cálculo de taxas de juros, por exemplo.</p>
  </div>
    </div>
  </div>
  <div class="col">
  <div class="card border-warning mb-3" style="max-width: 18rem;">
  <img src="{{ asset('images/rh.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Recursos Humanos</h5>
    <p class="card-text">O estudante irá aprender a cuidar da documentação necessária para aposentadoria, contratação e demissão de profissionais</p>
  </div>
    </div>
  </div>
  <div class="col">
  <div class="card border-warning mb-3" style="max-width: 18rem;">
  <img src="{{ asset('images/SJ.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Serviços Juridícos</h5>
    <p class="card-text">aluno vai estudar as áreas do Direito. Vai aprender sobre a Constituição Federal, a punição aos crimes (direito penal)</p>
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
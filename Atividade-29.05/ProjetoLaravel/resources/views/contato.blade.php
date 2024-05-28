<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato</title>
   
    
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
              <a class="nav-link mx-2" href="noticias">Noticias</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link mx-2" href="#">
              <img src="{{ asset('images/logo-etec.png') }}" alt="Bootstrap" width="70" height="50">              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#">Contato</a>
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
<img src="{{ asset('images/Contato.png') }}" class="img-fluid">
<div class="container">
<section style="background-color: #FFFCF0" class=" py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Contate-nos</h2>
        <p class="text-secondary mb-5 text-center">Está com duvida? Entre em contato com a gente!</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-9">
        <div class="bg-white border rounded shadow-sm overflow-hidden">

        <form action="{{ route('contato.submit') }}" method="POST">
    @csrf <!-- Adiciona token CSRF para proteção -->
    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
        <div class="col-12">
            <label for="nome" class="form-label">Nome <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-12 col-md-6">
            <label for="telefone" class="form-label">Número de Telefone <span class="text-danger">*</span></label>
            <div class="input-group">
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                </span>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>
        </div>
        <div class="col-12">
            <label for="endereco" class="form-label">Endereço <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="col-12 col-md-6">
            <label for="sexo" class="form-label">Sexo <span class="text-danger">*</span></label>
            <select class="form-control" id="sexo" name="sexo" required>
                <option value="">Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </div>
        <div class="col-12">
                <div class="col-12">
                <label for="assunto" class="form-label">Assunto<span class="text-danger">*</span></label>
                <textarea class="form-control" id="assunto" name="assunto" rows="3" required></textarea>
              </div>
                </div>
            
        <div class="col-12">
            <div class="d-grid">
                <button class="btn btn-warning btn-lg" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</form>


        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>
</div>
</div>
<footer style="background-color: #FFFCF0" class="text-center text-white">
  <div class="text-center p-3" style="background-color: rgba(242, 212, 90);">
    © 2024 Etec Zona Leste:
  </div>
</footer>
</body>
</html>
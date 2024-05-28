<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meus dados</title>
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
<section style="background-color: #FFFCF0" class=" py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h1 class="mb-4">Meus Dados</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Nome</th>
                        <td>{{ $nome }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Telefone</th>
                        <td>{{ $telefone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Endereço</th>
                        <td>{{ $endereco }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Sexo</th>
                        <td>{{ $sexo }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Assunto</th>
                        <td>{{ $assunto }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
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

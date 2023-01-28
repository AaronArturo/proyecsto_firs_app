<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <header>
        <div class="jumbotron  jumbotronEncabezado">
            <img src="img/icono-encabezado.png" alt="">
            <h1 class="textoEncabezado">Sergio  A. Panti Salvador</h1>
            <p class="lead lead-head">Analista- Programador de Sistemas Informaticos.</p>
            @yield('paginaActual')
        </div>
    <nav>
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="hola">hola</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto">contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('master') }}">mestros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
    </nav>
    </header>

    <main>
        @yield('conteidoPrincipal')
    </main>

    <footer>
        @yield('numeroDePagina')
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <p class="lead">Footer</p>
            </div>
          </div>
    </footer>
</body>
</html>
<header>
    <div class="jumbotron  jumbotronEncabezado">
        <img src="img/icono-encabezado.png" alt="">
        <h1 class="textoEncabezado">Sergio  A. Panti Salvador</h1>
        <p class="lead lead-head">Analista- Programador de Sistemas Informaticos.</p>
      </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark   menuPersonal">
    <img src="img/komodoMenu.png" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicios">Servicios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Capacitación
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="welcome">hola</a>
            <a class="dropdown-item" href="adios">adios</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1">Contacto</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>

@yield('index');
@yield('servicios');
@yield('contenido');
<footer>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <div class="redes-sociales">
            <img src="img/iconos-redes/facebook.png" alt="" class="red">
            <img src="img/iconos-redes/twiiter.png" alt="" class="red">
            <img src="img/iconos-redes/Linkedin-icon.png" alt="" class="red">
              
          </div>
          
          <h1 class="display-4">Sergio A. Pantin</h1>
          <p class="lead lead-footer">&copy; Sergio 2020</p>
        </div>
      </div>
</footer>
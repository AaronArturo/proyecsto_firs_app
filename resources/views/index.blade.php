<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <link rel="stylesheet" href="css/estilos.css">
    <title>Demo Boostrap</title>
</head>

<body>
    @extends('menu')
    @section('index')
    <main class="container marginTop">
        <section class="row">
           
            <section class="col-sm-4">
                <h2>Acerca de mi</h2>
                <h5>Perfil</h5>
                <img src="img/programmer.png" alt="" class="perfil-img">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, totam.
                </p>
               
                <h3>Enlaces</h3>
                <p>Enlaces de interes</p>
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Linkedin</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">GitHub</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Flutter doc</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>

            </section>
            <section class="col-sm-8">
                <h2>Proyectos Realizados</h2>
                <h5>Siste Integral Tributario SAEFI</h5>
                <img src="img/saefi.jpg" alt="">
                <p>Lorem ipsum dolor sit amet.
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur cumque adipisci ipsum voluptas harum blanditiis.</p>
                </p>

                <br>
                
                <h5>Capacitacion JAVA en UNID CAMPECHE</h5>
                <img src="img/img-tecnologias/java.png" alt="" class="tecnologias-Img">
                <p>Lorem ipsum dolor sit amet.
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur cumque adipisci ipsum voluptas harum blanditiis.</p>
                </p>
            </section>       
        </section>
    </main>
    @endsection
</body>

</html>
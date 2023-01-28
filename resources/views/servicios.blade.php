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

@section('servicios')
    <main class="container marginTop" >

        <h2>Mis principales Servicios</h2>
        <h5>Capacitaciones personales o colectivas</h5>
        <hr>
        <section class="row">
            <section class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/img-tecnologias/css3.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CSS Pro</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leer mas...</a>
                    </div>
                  </div>
            </section>
            <section class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/img-tecnologias/java.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">JAVA SE y EE</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leer mas...</a>
                    </div>
                  </div>
            </section>
            <section class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/img-tecnologias/javascript.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">JavaScript Pro</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leer mas...</a>
                    </div>
                  </div>
            </section>
        </section>
<br>
        <section class="row">
            <section class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/img-tecnologias/android.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Desarrollo de App</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leer mas...</a>
                    </div>
                  </div>
            </section>
            <section class="col-sm-4">
                <div class="card cartas">
                    <img src="img/img-tecnologias/python-logo.png" class="card-img-top img-card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Python Pro</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="cssPro.html" class="btn btn-primary">Leer mas...</a>
                    </div>
                  </div>
            </section>
            <section class="col-sm-4">
                <div class="card cartas">
                    <img src="img/img-tecnologias/flutter-logo.png" class="card-img-top img-card-flutter" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Flutter Pro</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leer mas...</a>
                    </div>
                  </div>
            </section>
        </section>

        <br>
    </main>
    @endsection
</body>

</html>
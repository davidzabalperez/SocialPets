<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon (3).ico" />

    <title>Social Pets</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/grayscale.css" rel="stylesheet">

  </head>

    <!-- NavBar -->
    @include("layouts.navbar")

  <body id="page-top">

<section id="socialpets" class="about-section text-center">
<br>
      <div class="container">
        <br>
        <div class="row">
          <br>
          <div class="col-lg-10 mx-auto">
            <br>
            <br><h3 class="text-white mb-4">Estas en el panel del administrador</h3>
            <p class="text-white-50">Es una red social, para que tus mascotas conozcan a otras y puedan ser amigos. Nuestro objetivo es abarcar a una gran cantidad de mascotas, pero al ser un proyecto, trataremos con perros principalmente. </p>
            <p class="botones-admin">
            <a class="btn btn-primary botones-admin js-scroll-trigger" data-toggle="modal" data-target="#noticiaModal">Publicar noticia</a>
            <a class="btn btn-primary botones-admin js-scroll-trigger" data-toggle="modal" data-target="#listarUsuarios">Administrar usuarios</a>
            <a class="btn btn-primary botones-admin js-scroll-trigger" href="{{ route('darAlta') }}">Dar de alta</a>
            </p>
          </div>

        </div>
      </div>
      <br>
    </section>

    <!-- Footer -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
        <footer class="bg-black small text-center text-white-50">
      <div class="container">
         
        Copyright &copy; Social Pets 2019
      </div>
      </footer>
  </body> 
</html>
@include('noticia')
@include('registerModal')
@include('administrarUsuarios')
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon (3).ico" />
    <link rel="stylesheet" type="text/css" href="/css/feed.css">
    <link rel="stylesheet" type="text/css" href="/css/grayscale.css">

    <title>Social Pets Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->


  </head>



  <body id="page-top">
    <!-- NavBar -->
    @include("layouts.navbar")
<section id="socialpets" class="about-section text-center">

<div class="container">
  @foreach($usuarios as $usuario)
  <div class="box">
    <h3>{{$usuario->name}}</h3>
    <div class="box-sub">
      <div class="avatar">
      <img src="/storage/avatars/{{ $usuario->avatar }}"/>
    </div>
    </div>
    <p>Raza: {{$usuario->race}}</p>
    @if($usuario->age > 1)
    <p>Edad: {{$usuario->age}} años</p>
    @else
    <p>Edad: {{$usuario->age}} año</p>
    @endif
    <p>Sexo: {{ $usuario->gender == 1 ? 'Femenino' : 'Masculino'}}</p>
    <a class="btn btn-primary btn-sm" rel="publisher"
       href="">
        <i class="fa fa-thumbs-up"></i>
    </a>
    <a class="btn btn-warning btn-sm" rel="publisher" href="">
        <i class="fa fa-thumbs-down"></i>
    </a>
  </div>

@endforeach
</div>


</section>

    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
  </body>
<footer class="bg-black small text-center text-white-50">
      <div class="container">

        Copyright &copy; Social Pets 2019
      </div>
</footer>
</html>

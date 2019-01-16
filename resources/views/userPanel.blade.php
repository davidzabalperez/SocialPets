<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon (3).ico" />
    

    <title>Social Pets Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/feed.css">
  </head>



    
  <body id="page-top">
    <!-- NavBar -->
    @include("layouts.navbar")
   @foreach($usuarios as $usuario)
     <div class="container">
            <div class="row mt-40">
                <div class="col-lg-4">
                    <div class="box1">
                         <img alt="" src="/img/perro-cuadrado.jpg">
                        <h3 class="title">{{$usuario->name}}</h3>
                        <ul class="icon">
                            <li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
                            <li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
        

  </body>
<footer class="bg-black small text-center text-white-50">
      <div>
         
        Copyright &copy; Social Pets 2019
      </div>
</footer>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-easing/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>
</html>

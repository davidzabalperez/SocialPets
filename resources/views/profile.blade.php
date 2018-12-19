<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon (3).ico" />
    <link rel="stylesheet" type="text/css" href="/css/feed.css">

    <title>Social Pets Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

  </head>


    
  <body id="page-top">
    <!-- NavBar -->
    @include("layouts.navbar")
<section id="socialpets" class="about-section text-center">

  <div class="row">
  <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="/img/perro-cuadrado.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                    <div class="desc">{{ Auth::user()->age }}</div>
                    <div class="desc">{{ Auth::user()->gender }}</div>
                    <div class="desc">{{ Auth::user()->race }}</div>
                </div>
                <a class="btn btn-primary btn-sm" rel="publisher"
                       href="">
                        <i class="fa fa-thumbs-up"></i>
                    </a>
            </div>
        </div>
     
    <!-- <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
            <form action="/changeProfile" method="post">
                        @csrf
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                    <button type="submit" class="btn btn-primary">cambiar nombre</button>
                    <br>
                    </form>
                </div>
            </div>
        </div> -->
    
  </div>
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
         
        Copyright &copy; Social Pets 2018
      </div>
</footer>
</html>

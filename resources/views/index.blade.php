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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          @if(Session::has('success-message'))
    <div class="alert alert-success"> 
        <button type="button" 
            class="close" 
            data-dismiss="alert" 
            aria-hidden="true">&times;</button>
        {!! session()->get('success-message') !!} 
    </div>
@endif
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="https://preview.ibb.co/hqk1Nq/logo.png" alt="logo" width="120px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto navbar">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#socialpets">¿Qué es Social Pets?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#caracteristicas">Caracteristicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
            </li>
          </ul>
        <ul class="navbar-nav mr navbar">
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#myModal">Login <i class="fas fa-sign-in-alt"></i></a>
            </li>
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Register <i class="fas fa-user-circle"></i></a>
            </li>
        </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Social Pets</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Una red social  Open Source para mascotas.</h2>
          <a href="#socialpets" class="btn btn-primary js-scroll-trigger">Más</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="socialpets" class="about-section text-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Social Pets</h2>
            <p class="text-white-50">Es una red social, para que tus mascotas conozcan a otras y puedan ser amigos. Nuestro objetivo es abarcar a una gran cantidad de mascotas, pero al ser un proyecto, trataremos con perros principalmente. </p>
          </div>
        </div>
        <img src="img/bg-signup.png" class="img-fluid" width="750px" alt="">
      </div>
    </section>

    <!-- Carac Section -->
    <section id="caracteristicas" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/mobileApp.png" width="650px" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Match!</h4>
              <p class="text-black-50 mb-0">Puedes elegir con quien quedar. Puedes visualizar las imagenes de las mascotas y del dueño</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/dog_meet.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Meet To!</h4>
                  <p class="mb-0 text-white-50">Podras crear quedadas y se les alertara a los usuarios cercanos.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/dm.png" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">D.M</h4>
                  <p class="mb-0 text-white-50">Podras enviar mensajes a los usuarios para conocer mejor al dueño y al perro.</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Signup Section -->
    <section id="contacto" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Ponte en contacto con nosotros!</h2>

          <form action="{{ URL::to('/contact') }}" method="POST">
            @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="email" style="font-weight: bold; color: white">Email</label>
      <input type="email" class="form-control"  placeholder="Email" name="email" required="true">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="name" style="font-weight: bold; color: white">Nombre</label>
      <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required="true">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="doubt" style="font-weight: bold; color: white">¿Cuál es tu duda?</label>
      <textarea class="form-control" id="doubt" rows="3" placeholder="Escribe tu mensaje aqui..." name="doubt" required="true"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
             <div class="zoom">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Dirección</h4>
                <hr class="my-4">
                <div class="small text-black-50" style="font-size: 12px;">Calle de Alejandría, 2, 20013 San Sebastián</div>
              </div>
            </div>
          </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="zoom">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="mailto:socialpets@socialpets.com">Enviar un correo.</a>
                </div>
              </div>
            </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="zoom">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Teléfono</h4>
                <hr class="my-4">
                <div class="small text-black-50">+1 (555) 902-8832</div>
              </div>
            </div>
          </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fas fa-cloud"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/Maurii19/socialpets.github.io" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Social Pets 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
    <script src="/js/emailValidator.js"></script>  
  <script>
$('div.alert').delay(5000).slideUp(300);
</script>

  </body>

</html>
@include('login')
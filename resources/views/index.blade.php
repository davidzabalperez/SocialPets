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


   @include('layouts.navbar')

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Social Pets</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">La mejor comunidad de perros</h2>
          @guest
          <a class="btn btn-primary js-scroll-trigger efecto" data-toggle="modal" data-target="#registroModal">¡Registrate!</a>
          @endguest
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="socialpets" class="about-section text-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Social Pets</h2>
            <p class="text-white-50">¿Alguna vez has salido a la calle a pasear a tu perro, y te has encontrado con otro perro con el se ha congeniado?</p>
            <p class="text-white-50">
            Seguro que te gustaría que volviesen a encontrarse, o que quedasen más a menudo. Gracias a esta aplicación podremos ponernos en contacto con su dueña/o para poder hacer que nuestros amigos tengan una mejor vida social.</p>
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
              <h4>Le gusta!</h4>
              <p class="text-black-50 mb-0">Puedes elegir con quien quedar y visualizar las imagenes de las mascotas.</p>
            </div>
            <br>
            <div class="featured-text text-center text-lg-left">
              <h4>Tengo una notificación!</h4>
              <p class="text-black-50 mb-0">Envia mensajes privados.</p>
            </div>
            <br>
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
                  <h4 class="text-white">Quedada!</h4>
                  <p class="mb-0 text-white-50">Podras crear quedadas y se les alertara a los usuarios.</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
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
                  <p class="mb-0 text-white-50">Podras enviar mensajes a los usuarios para conocer mejor al perro.</p>
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
                <div class="small text-black-50" style="font-size: 12px;" id="direccion">Zubiri Manteo</div>
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
          <a href="https://github.com/davidzabalperez/SocialPets" class="mx-2" target="_blank" rel="noopener">
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
   <!-- <script src="/js/loginRegisterValidator.js"></script>
    <script src="/js/jquery.validate.js"></script> -->
    <script src="/js/efectos.js"></script> 
  <script>
$('div.alert').delay(5000).slideUp(300);
</script>

  </body>

</html>
@include('modals.loginModal')
@include('modals.registerModal')
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
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/grayscale.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/feed.css">
  </head>



  <body id="page-top">
    <!-- NavBar -->
    @include("layouts.navbar")
<section class="about-section">
<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">

                <form action="{{ url('/user/'.$user->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    Nombre:<input type="text" id="name" name="name" value="{{ $user->name }}"><br>

                    Email:<input type="email" id="email" name="email" value="{{ $user->email }}"><br>

                    Edad:<input type="number" id="age" name="age" value="{{ $user->age }}"><br>

                    Género:<select name="gender" id="gender">
                        <option value="0">Masculino</option>
                        <option value="1">Femenino</option>
                    </select><br>

                    Raza:<input type="text" id="race" name="race" value="{{ $user->race }}"><br>

                    Género:<select name="role" id="role">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select><br>
                    <a href="/admin">Volver atrás</a><br>

                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>

</section>

  </body>
    <!-- Footer -->
<footer class="bg-black small text-center text-white-50">
      <div class="container">

        Copyright &copy; Social Pets 2018
      </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="/jquery/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/grayscale.min.js"></script>


</html>
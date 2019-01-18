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
    <link rel="stylesheet" type="text/css" href="css/feed.css">
  </head>



  <body class="profile-section text-center">
    <!-- NavBar -->
    @include("layouts.navbar")
    @include("layouts.profile")
   
</div>


<div id="editProfileModal" class="modal fade">
    <div class="modal-dialog">

    <div class="modal-content">
      <h4 id="tituloEditarUsuario" class="modal-title">Editar perfil de usuario</h4>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

  <form action="{{ route('user.update', Auth::user()->id )}}" method="post">
    @method('PATCH')
    @csrf

    <!--NOMBRE -->
  <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-6 col-md-6">
      <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Cambiar nombre</button>
  </div>
  <!--EMAIL -->
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-6 col-md-6">
      <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Cambiar email</button>
  </div>
</form>
<!--PASSWORD -->
<form method="POST" action="{{ route('changePassword') }}">
  @csrf

  <div class="form-group row">
    <label for="new-password" class="col-sm-5 col-form-label col-form-label-sml">Contraseña actual</label>
    <div class="col-12 col-md-7">
      <input type="password" class="form-control" id="current-password" name="current-password" required>
      @if ($errors->has('current-password'))
          <span class="help-block">
          <strong>{{ $errors->first('current-password') }}</strong>
      </span>
      @endif
    </div>
  </div>


  <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
      <label for="new-password" class="col-sm-5 col-form-label col-form-label-sml">Nueva contraseña</label>
      <div class="col-12 col-md-7">
          <input id="new-password" type="password" class="form-control" name="new-password" required>
          @if ($errors->has('new-password'))
              <span class="help-block">
              <strong>{{ $errors->first('new-password') }}</strong>
          </span>
          @endif
      </div>
  </div>

  <div class="form-group row">
      <label for="new-password-confirm" class="col-sm-5 col-form-label col-form-label-sml">Repetir contraseña:</label>

      <div class="col-12 col-md-7">
          <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
      </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-5">
  <button type="submit" class="btn btn-primary btn-sm">
      Cambiar
  </button>
</div>
</div>
</form>



    <form action="/profile" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  Cambiar imagen de perfil
                  <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                  <small id="fileHelp" class="form-text text-muted"></small>
                                <button type="submit" class="btn btn-primary btn-sm">Subir imagen</button>

              </div>

          </form>

          <div class="modal-body">
                              <br>
              <button class="btn btn-danger btn-sm" rel="publisher" data-toggle="modal" data-target="#deleteModal" id="hideModal">Eliminar</button>
                     
                          <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-footer">
                                      Confirmacion borrar cuenta
                                      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
                                     

                                      <form method="post" action="{{ route('user.destroy',$user->id)}}" >
                                          @csrf
                                          @method('DELETE')

                                      </form>
                                      <button type="submit" class="btn btn-danger">Borrar</button>
                                  </div>
                              </div>
                          </div>
                      </div>
          </div>
      </div>
  </div>
</div>
</div>
    <!-- Footer -->
    <div class="footerCustom">
      <div class="container">

        Copyright &copy; Social Pets 2018
      </div>
</div>
  </body>

<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>


</html>
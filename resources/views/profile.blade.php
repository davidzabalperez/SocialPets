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
                    <img src="/storage/avatars/{{ $user->avatar }}" />
                </div>
                <div class="info">
                <div class="profile-header-container">

                <div class="profile-header-img">
                    
                    <!-- badge -->
                    <div class="rank-label-container">
                        <span class="label label-default rank-label">{{$user->name}}</span>
                    </div>
                </div>
            </div>
                    <div class="desc">{{ Auth::user()->age }}</div>
                    <div class="desc">{{ Auth::user()->gender }}</div>
                    <div class="desc">{{ Auth::user()->race }}</div>
                </div>
                <a class="btn btn-light" rel="publisher" data-toggle="modal" data-target="#editProfileModal">
                    <i class="fa fa-cogs"></i>
                </a>
            </div>
        </div>    
  </div>
</div>
</section>
<div id="editProfileModal" class="modal fade">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar perfil de usuario</h4>
      </div>
      <div class="modal-body">
        
        <form action="{{ route('user.update', Auth::user()->id )}}" method="post">
            @method('PATCH')    
            @csrf
            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
            <button type="submit" class="btn btn-primary">Cambiar nombre:</button>
        
            <br>
            <br>
         
            <input type="text" name="email" id="email" value="{{ Auth::user()->email }}">
            <button type="submit" class="btn btn-primary">Cambiar email:</button>
        </form>

        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
          {{ csrf_field() }}

          <div class="form-group">
              <label for="new-password" class="col-md-4 control-label">Contraseña actual:</label>

              <div class="col-md-6">
                  <input id="current-password" type="password" class="form-control" name="current-password" required>

                  @if ($errors->has('current-password'))
                      <span class="help-block">
                      <strong>{{ $errors->first('current-password') }}</strong>
                  </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
              <label for="new-password" class="col-md-4 control-label">Nueva contraseña:</label>

              <div class="col-md-6">
                  <input id="new-password" type="password" class="form-control" name="new-password" required>

                  @if ($errors->has('new-password'))
                      <span class="help-block">
                      <strong>{{ $errors->first('new-password') }}</strong>
                  </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <label for="new-password-confirm" class="col-md-4 control-label">Vuelve a insertar la nueva contraseña:</label>

              <div class="col-md-6">
                  <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Cambiar Contraseña:
                  </button>
              </div>
          </div>
    </form>
        <div class="modal-body">
            <form action="/profile" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    Cambiar imagen de perfil:
                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="modal-body">
                    Eliminar cuenta:
                    <a class="btn btn-danger" rel="publisher" data-toggle="modal" data-target="#deleteModal" id="hideModal">Confirmar Eliminar</a>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    ...
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    Confirmacion borrar cuenta:
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    
                                    <form method="post" action="{{ route('user.destroy',$user->id)}}" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
        </div>
        </div>
        </div>
        </div>
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
